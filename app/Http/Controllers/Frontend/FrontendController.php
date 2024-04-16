<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function sendmail(){
        return view('frontend.users.invoice.mail-support');
    }

    public function newArrivals()
    {
        return view('frontend.pages.new-arrival');
    }

    public function featuredProducts()
    {
        return view('frontend.pages.featured-products');
    }

    public function searchProducts(Request $request)
    {
        if ($request->search) {
            $searchProducts = Product::where('name', 'LIKE', '%' . $request->search . '%')->latest()->paginate(15);
            return view('frontend.pages.search', compact('searchProducts'));
        } else {
            return redirect()->back()->with('Empty Search');
        }
    }

    public function categories()
    {
        $categories = Category::where('status', '0')->get();
        return view('frontend.collections.category.index', compact('categories'));
    }

    public function products($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        if ($category) {
            return view('frontend.collections.products.index', compact('category'));
        } else {
            return redirect()->back();
        }
    }

    public function productView(string $category_slug, string $product_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        if ($category) {
            $product = $category->products()->where('slug', $product_slug)->where('status', '0')->first();
            if ($product) {
                return view('frontend.collections.products.view', compact('product', 'category'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function productViewApi($id)
    {
        $product = Product::findOrFail($id);
        $productImages = $product->productImages()->get();
        if ($product) {
            return response()->json([
                'status' => 200,
                'data' => [
                    'product' => $product,
                    'productImages' => $productImages
                ]
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Product Found'
            ]);
        }
    }

    public function contact()
    {
        return view('frontend.pages.contact-us');
    }

    public function thankyou()
    {
        return view('frontend.pages.thank-you');
    }
}
