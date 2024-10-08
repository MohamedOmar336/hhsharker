<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Characteristic;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;
use App\Imports\ProductsImport;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $characteristics = Characteristic::all();
        $categories = Category::all();

        // Query products where parent_id is null (main products only)
        $query = Product::whereNull('parent_id')->orderBy('created_at', 'desc');

        // Apply filter for 'name' if not empty
        if ($request->has('name') && $request->name != '') {
            $query->where(function ($q) use ($request) {
                $q->where('product_name_en', 'like', '%' . $request->name . '%')
                    ->orWhere('product_name_ar', 'like', '%' . $request->name . '%');
            });
        }

        // Apply filter for 'category' if not empty
        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }

        // Apply filter for 'status' if not empty
        if ($request->has('status') && $request->status != '') {
            $query->where('status', 'like', '%' . $request->status . '%');
        }

        // Fetch the records with their child products
        $records = $query->with('children')->paginate(100);

        return view('admin.products.index', compact('records', 'characteristics', 'categories'));
    }

    public function create()
    {
        $categories = Category::where('level', 1)->where('active', true)->get();
        $characteristics = Characteristic::all();
        return view('admin.products.create', compact('categories', 'characteristics'));
    }

    public function store(Request $request)
    {
        // Validate product data
        $validatedData = $request->validate([
            'type' => 'required|string|max:16',
            'product_name_en' => 'required|string|max:71',
            'product_name_ar' => 'required|string|max:86',
            'model_number' => 'nullable|string|max:19',
            'product_option_title' => 'nullable|string|max:3',
            'product_option_list' => 'nullable|numeric',
            'main_option' => 'nullable|string|max:29',
            'feature_en' => 'nullable|json',
            'feature_ar' => 'nullable|json',
            'status' => 'nullable|string|max:50',
            'saso' => 'nullable|string|max:255',  // If this field is still relevant
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'group' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'sub_category' => 'nullable|string|max:255',
            'child' => 'nullable|string|max:255',
            'sub_child' => 'nullable|string|max:255',
            'best_selling' => 'nullable|boolean',
            'featured' => 'nullable|boolean',
            'recommened' => 'nullable|boolean',
            'title_tag_en' => 'nullable|string|max:255',
            'title_tag_ar' => 'nullable|string|max:255',
            'meta_description_en' => 'nullable|string',
            'meta_description_ar' => 'nullable|string',
            'product_schema_en' => 'nullable|json',
            'product_schema_ar' => 'nullable|json',
        ]);

        // Handle product image upload
        if ($request->hasFile('product_image')) {
            $imageName = $request->file('product_image')->store('product_images', 'public');
            $validatedData['product_image'] = $imageName;
        }

        // Store product data
        try {
            $product = Product::create($validatedData);
        } catch (\Exception $e) {
            Log::error('Product creation failed: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Failed to create the product.']);
        }

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $categories = Category::where('level', 1)->where('active', true)->get();
        $characteristics = Characteristic::where('product_id', $product->id)->get();
        return view('admin.products.edit', compact('product', 'categories', 'characteristics'));
    }

    public function update(Request $request, Product $product)
    {
        $this->updateImages($request,$product);

        $data = $request->validate([
            'type' => 'required|string|max:16',
            'product_name_en' => 'required|string|max:71',
            'product_name_ar' => 'required|string|max:86',
            'model_number' => 'nullable|string|max:19',
            'product_option_title' => 'nullable|string|max:3',
            'product_option_list' => 'nullable|numeric',
            'main_option' => 'nullable|string|max:29',
            'feature_en' => 'nullable|json',
            'feature_ar' => 'nullable|json',
            'status' => 'nullable|string|max:50',
            'saso' => 'nullable|string|max:255',  // If still relevant
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'group' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'sub_category' => 'nullable|string|max:255',
            'child' => 'nullable|string|max:255',
            'sub_child' => 'nullable|string|max:255',
            'best_selling' => 'nullable|boolean',
            'featured' => 'nullable|boolean',
            'recommened' => 'nullable|boolean',
            'title_tag_en' => 'nullable|string|max:255',
            'title_tag_ar' => 'nullable|string|max:255',
            'meta_description_en' => 'nullable|string',
            'meta_description_ar' => 'nullable|string',
            'product_schema_en' => 'nullable|json',
            'product_schema_ar' => 'nullable|json',
        ]);

        if ($request->hasFile('product_image')) {
            if ($product->product_image && file_exists(storage_path("app/public/{$product->product_image}"))) {
                unlink(storage_path("app/public/{$product->product_image}"));
            }
            $data['product_image'] = $request->file('product_image')->store('product_images', 'public');
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        if ($product->product_image && file_exists(storage_path("app/public/{$product->product_image}"))) {
            unlink(storage_path("app/public/{$product->product_image}"));
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

    public function export()
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }

    public function importForm()
    {
        return view('admin.products.import');
    }

    public function import(Request $request)
    {
        $request->validate([
            'import_file' => 'required|file|mimes:xlsx',
        ]);

        Excel::import(new ProductsImport, $request->file('import_file'));

        return redirect()->route('products.index')->with('success', 'Products imported successfully.');
    }

    public function bulkDelete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:products,id',
        ]);

        Product::whereIn('id', $request->input('ids'))->delete();

        return redirect()->route('products.index')->with('success', 'Selected products deleted successfully.');
    }

    public function updateImages(Request $request, Product $product)
    {
        // Validate that 'images' is an array of files and each file is an image
        $request->validate([
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust rules as needed
        ]);

        // Initialize an array to store the paths of the uploaded images
        $imagePaths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                // Use the uploadImage helper function to handle the file upload
                $imageName = uploadImage($file);

                // Add the image name to the array
                $imagePaths[] = $imageName;
            }
        }

        // Save the array as JSON in the 'product_image' column
        $product->update([
            'product_image' => json_encode($imagePaths),
        ]);

        return redirect()->route('products.index')->with('success', 'Product images updated successfully.');
    }

}
