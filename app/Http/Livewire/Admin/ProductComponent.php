<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Color;
use App\Models\Orderitem;
use App\Models\ProductColor;
use App\Models\ProductImage;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use PhpParser\Node\Stmt\Foreach_;

class ProductComponent extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $category_id,
        $name,
        $brand,
        $description,
        $original_price,
        $selling_price,
        $quantity,
        $trending,
        $featured,
        $status,
        $meta_title,
        $meta_keyword,
        $meta_description;
    public
        $product_id,
        $productEdit,
        $productColorQuantity,
        $images = [],
        $imageEdit = [],
        $imageArray = [],
        $colorSelected = [],
        $colorQuantitySelected = [];

    public $updateMode = false, $createMode = false;

    public function rules()
    {
        return [
            'category_id' => [
                'required',
                'integer'
            ],
            'name' => [
                'required',
                'string',
            ],
            'brand' => [
                'required',
                'string',
                'max:255'
            ],
            'description' => [
                'required',
                'string'
            ],
            'original_price' => [
                'required',
                'integer'
            ],
            'selling_price' => [
                'required',
                'integer'
            ],
            'quantity' => [
                'required',
                'integer'
            ],
            'trending' => [
                'nullable'
            ],
            'status' => [
                'nullable'
            ],
            'meta_title' => [
                'required',
                'string',
                'max:255'
            ],
            'meta_keyword' => [
                'required',
                'string'
            ],
            'meta_description' => [
                'required',
                'string',
            ],
            'images' => [
                'nullable',
            ]
        ];
    }

    public function resetInput()
    {
        $this->category_id = NULL;
        $this->name = NULL;
        $this->brand = NULL;
        $this->description = NULL;
        $this->original_price = NULL;
        $this->selling_price = NULL;
        $this->quantity = NULL;
        $this->trending = NULL;
        $this->featured = NULL;
        $this->status = NULL;
        $this->meta_title = NULL;
        $this->meta_keyword = NULL;
        $this->meta_description = NULL;
        $this->product_id = NULL;
        $this->productEdit = NULL;
        $this->images = NULL;
        $this->imageEdit = NULL;
        $this->colorSelected = NULL;
        $this->colorQuantitySelected = NULL;
    }

    public function viewMode()
    {
        $this->createMode = false;
        $this->updateMode = false;
        $this->resetInput();
    }

    public function editMode()
    {
        $this->resetInput();
    }

    public function createMode()
    {
        $this->createMode = true;
        $this->resetInput();
    }

    public function storeProduct()
    {
        $validatedData = $this->validate();
        $product = Product::create([
            'category_id' => $this->category_id,
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'brand' => $this->brand,
            'description' => $this->description,
            'original_price' => $this->original_price,
            'selling_price' => $this->selling_price,
            'quantity' => $this->quantity,
            'trending' => $this->trending == true ? '1' : '0',
            'featured' => $this->featured == true ? '1' : '0',
            'status' => $this->status == true ? '1' : '0',
            'meta_title' => $this->meta_title,
            'meta_keyword' => $this->meta_keyword,
            'meta_description' => $this->meta_description,
        ]);

        if ($this->images) {
            foreach ($this->images as $image) {
                $image->store('images');
                $imageName = $image->hashName();
                $manager = new ImageManager();
                $image = $manager->make($image)->resize(300, 200);
                $image->save('uploads/' . $imageName);
                $imagePath = 'uploads/' . $imageName;
                $product->productImages()->create([
                    'product_id' => $product->id,
                    'image' => $imagePath,
                ]);
            }
        }

        if ($this->colorSelected) {
            foreach ($this->colorSelected as $key => $color) {
                $product->productColors()->create([
                    'product_id' => $product->id,
                    'color_id' => $color,
                    'quantity' => $this->colorQuantitySelected[$key] ?? 0
                ]);
            }
        }
        $this->resetInput();
        $this->createMode = false;
        session()->flash('message', 'Product Added Successfully');
    }


    public function editProduct(int $product_id)
    {
        $product = Product::findOrFail($product_id);
        $this->productEdit = $product;

        $this->product_id = $product->id;
        $this->category_id = $product->category_id;
        $this->name = $product->name;
        $this->brand = $product->brand;
        $this->description = $product->description;
        $this->original_price = $product->original_price;
        $this->selling_price = $product->selling_price;
        $this->quantity = $product->quantity;
        $this->trending = $product->trending == '1' ? true : false;
        $this->featured = $product->featured == '1' ? true : false;
        $this->status = $product->status == '1' ? true : false;
        $this->meta_title = $product->meta_title;
        $this->meta_keyword = $product->meta_keyword;
        $this->meta_description = $product->meta_description;
        $this->updateMode = true;

        $this->imageEdit = $product->productImages()->get();
    }

    public function updateProduct()
    {
        $validatedData = $this->validate();
        $product = Product::findOrFail($this->product_id);
        if ($product) {
            $product->update([
                'category_id' => $this->category_id,
                'name' => $this->name,
                'slug' => Str::slug($this->name),
                'brand' => $this->brand,
                'description' => $this->description,
                'original_price' => $this->original_price,
                'selling_price' => $this->selling_price,
                'quantity' => $this->quantity,
                'trending' => $this->trending == true ? '1' : '0',
                'featured' => $this->featured == true ? '1' : '0',
                'status' => $this->status == true ? '1' : '0',
                'meta_title' => $this->meta_title,
                'meta_keyword' => $this->meta_keyword,
                'meta_description' => $this->meta_description,
            ]);

            if ($this->images) {
                foreach ($this->images as $image) {
                    $imageName = $image->hashName();
                    $manager = new ImageManager();
                    $image = $manager->make($image)->resize(300, 200);
                    $image->save('uploads/' . $imageName);
                    $imagePath = 'uploads/' . $imageName;
                    $product->productImages()->create([
                        'product_id' => $product->id,
                        'image' => $imagePath,
                    ]);
                }
            }

            if ($this->colorSelected) {
                foreach ($this->colorSelected as $key => $color) {
                    $product->productColors()->create([
                        'product_id' => $product->id,
                        'color_id' => $color,
                        'quantity' => $this->colorQuantitySelected[$key] ?? 0
                    ]);
                }
            }
            $this->images = null;
            session()->flash('message', 'Product Updated Successfully');
        }
        $this->resetInput();
        $this->updateMode = false;
    }

    public function updateColorQuantity(int $product_id)
    {
        $productColorData = Product::findOrFail($this->product_id)->productColors()->where('id', $product_id)->first();
        $productColorData->update([
            'quantity' => $this->productColorQuantity[$product_id],
        ]);
        $this->productColorQuantity = null;
    }


    public function deleteImage(int $image_id)
    {
        $productImage = ProductImage::findOrFail($image_id);
        if (File::exists($productImage->image)) {
            File::delete($productImage->image);
        }
        $productImage->delete();
        $this->imageEdit = $this->productEdit->productImages()->get();
        session()->flash('message', 'Image Delete Successfully');
    }

    public function deleteProdColor(int $prod_color_id)
    {
        $prodColor = ProductColor::findOrFail($prod_color_id);
        $prodColor->delete();
        session()->flash('message', 'ProductColor Delete Successfully');
    }

    public function deleteProduct(int $product_id)
    {
        $this->product_id = $product_id;
    }

    public function destroyProduct()
    {
        $orderItems = Orderitem::all()->toArray();
        $orderItemProductIds = Arr::pluck($orderItems, 'product_id');
        if (in_array($this->product_id, $orderItemProductIds)) {
            session()->flash('message', 'Products on order cannot be deleted');
        } else {
            Product::findOrFail($this->product_id)->delete();
            session()->flash('message', 'Product Deleted Successfully');
        }
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(5);
        $productEdit = $this->productEdit;
        $categories = Category::all();
        $brands = Brand::all();
        $colors = Color::where('status', '0')->get();
        $orderItems = Orderitem::all();
        return view(
            'livewire.admin.product.index',
            ['categories' => $categories, 'products' => $products, 'brands' => $brands, 'colors' => $colors, 'productEdit' => $productEdit, 'orderItems' => $orderItems]
        )->extends('layouts.admin')
            ->section('content');
    }
}
