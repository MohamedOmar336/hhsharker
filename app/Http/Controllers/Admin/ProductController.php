<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Characteristic;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $characteristics = Characteristic::all();
        $records = Product::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.products.index', compact('records', 'characteristics'));
    }

    public function create()
    {
        $categories = Category::where('level', 1)->where('active', true)->get();
        $characteristics = Characteristic::all();
        return view('admin.products.create', compact('categories', 'characteristics'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'nullable|string',
            'product_name_ar' => 'required|string|max:191',
            'product_name_en' => 'nullable|string|max:191',
            'product_description_ar' => 'nullable|string',
            'product_description_en' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'subcategory_id' => 'nullable|exists:categories,id',
            'model_number' => 'nullable|string|max:191',
            'status' => 'nullable|string|max:191',
            'catalog' => 'nullable|file|max:2048', // Adjusted for file upload
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'characteristics_en.*' => 'nullable|exists:characteristics,id',
            'characteristics_ar.*' => 'nullable|exists:characteristics,id',
            'optional_features_ar' => 'nullable|string|max:191',
            'optional_features_en' => 'nullable|string|max:191',
            'best_selling' => 'nullable|boolean',
            'featured' => 'nullable|boolean',
            'recommended' => 'nullable|boolean',
            'hp_dimensions_volume_en' => 'nullable|string|max:191',
            'hp_dimensions_volume_ar' => 'nullable|string|max:191',
            'color' => 'nullable|string|max:191',
            'power_supply' => 'nullable|string|max:191',
            'type_freon' => 'nullable|string|max:191',
            'technical_specifications' => 'nullable|string',
            'saso_certificate' => 'nullable|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products/images', 'public');
            $request->merge(['image' => $imagePath]);
        }
    
        // Handle catalog file upload if provided
        if ($request->hasFile('catalog')) {
            $catalogPath = $request->file('catalog')->store('products/catalogs', 'public');
            $request->merge(['catalog' => $catalogPath]);
        }
    
        // Create the product
        Product::create($request->all());
    
        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }
    
    public function edit(Product $product)
    {
        $categories = Category::where('level', 1)->where('active', true)->get();
        $characteristics = Characteristic::all(); // Replace with your characteristic model
        return view('admin.products.edit', compact('product', 'categories', 'characteristics'));
    }

    public function update(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required|string',
            'product_name_ar' => 'required|string|max:191',
            'product_name_en' => 'required|string|max:191',
            'product_description_ar' => 'nullable|string',
            'product_description_en' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'nullable|exists:categories,id',
            'model_number' => 'nullable|string|max:191',
            'status' => 'nullable|string|max:191',
            'catalog' => 'nullable|string|max:191',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'characteristics_en.*' => 'nullable|exists:characteristics,id',
            'characteristics_ar.*' => 'nullable|exists:characteristics,id',
            'optional_features_ar' => 'nullable|string|max:191',
            'optional_features_en' => 'nullable|string|max:191',
            'best_selling' => 'nullable|boolean',
            'featured' => 'nullable|boolean',
            'recommended' => 'nullable|boolean',
            'hp_dimensions_volume_en' => 'nullable|string|max:191',
            'hp_dimensions_volume_ar' => 'nullable|string|max:191',
            'color' => 'nullable|string|max:191',
            'power_supply' => 'nullable|string|max:191',
            'type_freon' => 'nullable|string|max:191',
            'technical_specifications' => 'nullable|string',
            'saso_certificate' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Handle image update if provided
        if ($request->hasFile('image')) {
            // Delete previous image if exists
            if ($product->image && file_exists(storage_path("app/public/{$product->image}"))) {
                unlink(storage_path("app/public/{$product->image}"));
            }
            // Upload new image
            $imagePath = $request->file('image')->store('products/images', 'public');
            $request->merge(['image' => $imagePath]);
        }

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        // Delete associated image if exists
        if ($product->image && file_exists(storage_path("app/public/{$product->image}"))) {
            unlink(storage_path("app/public/{$product->image}"));
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
