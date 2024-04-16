<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\CompareList;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class CompareController extends Controller
{
    public function addToCompare($productId)
    {
        $count = CompareList::all()->count();
        if ($count < 3) {
            $compareProduct = Product::find($productId);
            $compareProductImage = ProductImage::where('product_id', '=', $compareProduct->id)->get()->first();
            $compareProductBrand = Brand::find($compareProduct->brand);

            $allCompareItem = CompareList::all();
            $check = 0;
            foreach ($allCompareItem as $compareItem) {
                if ($compareProduct->name == $compareItem->compare_item_name) {
                    $check++;
                }
            }
            if ($check == 0) {
                $createCompare = CompareList::create([
                    'compare_item_name' => $compareProduct->name,
                    'compare_item_brand' => $compareProductBrand->name,
                    'compare_item_description' => $compareProduct->description,
                    'compare_item_price' => $compareProduct->selling_price,
                    'compare_item_image' => $compareProductImage->image
                ]);
                $createCompare->save();

                return redirect()->back()->with('message', 'Product Added to Compare Successfully');
            } else {
                return redirect()->back()->with('alert', 'This product has already added!!!');
            }
        } else {
            return redirect()->back()->with('alert', 'Compare List is full, cannot add anymore!!!');
        }
    }

    public function gotoCompare()
    {
        $takeCompareList = CompareList::all();
        return view('frontend.compare.index', [
            'takeCompareList' => $takeCompareList
        ]);
    }

    public function deleteFromCompare($compareId)
    {
        $deleteCompare = CompareList::find($compareId);
        $deleteCompare->delete();
        return redirect()->back();
    }

    public function compareReturn()
    {
        return redirect('/collections');
    }
}
