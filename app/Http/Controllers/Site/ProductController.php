<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductSetting;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $product_settings = ProductSetting::first();
        return view('site.products', compact('products', 'product_settings'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $related_products = Product::where('id', '!=', $product->id)
            ->latest()
            ->take(4)
            ->get();
        return view('site.product-details', compact('product', 'related_products'));
    }
}
