<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();
        $productSettings = ProductSetting::first();
        return view('admin.products.index', compact('products', 'productSettings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image',
            'desc' => 'required|string',
            'content' => 'required|string',
            'tags' => 'nullable|string',
            'material' => 'required|string',
            'dimensions' => 'required|string',
            'color_options' => 'required|string',
            'guarantee' => 'required|string',
            'montaj' => 'required|string',
        ]);

        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $imagePath = $image->storeAs('products', $imageName, 'public');

        $product = Product::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'image' => $imagePath,
            'desc' => $request->desc,
            'content' => $request->content,
            'tags' => $request->tags,
            'material' => $request->material,
            'dimensions' => $request->dimensions,
            'color_options' => $request->color_options,
            'guarantee' => $request->guarantee,
            'montaj' => $request->montaj,
        ]);

        return redirect()->route('admin.products.index')
            ->with('success', 'Ürün başarıyla oluşturuldu.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image',
            'desc' => 'required|string',
            'content' => 'required|string',
            'tags' => 'nullable|string',
            'material' => 'required|string',
            'dimensions' => 'required|string',
            'color_options' => 'required|string',
            'guarantee' => 'required|string',
            'montaj' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('products', $imageName, 'public');
            $product->image = $imagePath;
        }

        $product->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'desc' => $request->desc,
            'content' => $request->content,
            'tags' => $request->tags,
            'material' => $request->material,
            'dimensions' => $request->dimensions,
            'color_options' => $request->color_options,
            'guarantee' => $request->guarantee,
            'montaj' => $request->montaj,
        ]);

        return redirect()->route('admin.products.index')
            ->with('success', 'Ürün başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();

        return redirect()->route('admin.products.index')
            ->with('success', 'Ürün başarıyla silindi.');
    }

    public function updateSettings(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
        ]);

        $settings = ProductSetting::first() ?? new ProductSetting();
        $settings->fill($request->only(['title', 'desc']));
        $settings->save();

        return redirect()->route('admin.products.index')
            ->with('success', 'Ürün ayarları başarıyla güncellendi.');
    }
}
