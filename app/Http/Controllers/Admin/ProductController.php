<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Characteristic;
use App\Models\Product;
use App\Models\Category;
use App\Enums\EnumsSettings;
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;

use function PHPSTORM_META\type;
use function Psy\debug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Imports\ProductsImport;

class ProductController extends Controller
{
    public function index()
    {
        $characteristics = Characteristic::all();
        $records = Product::orderBy('created_at', 'desc')->paginate(100);
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
        $data = $request->validate([
            'type' => 'required|string|max:255',
            'product_name_ar' => 'required|string|max:255',
            'product_name_en' => 'required|string|max:255',
            'product_description_ar' => 'required|string|max:255',
            'product_description_en' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'nullable|exists:categories,id',
            'model_number' => 'nullable|string|max:100',
            'status' => 'nullable|string|max:50',
            'catalog' => 'nullable|file|mimes:pdf|max:2048',
            'hp_dimensions_volume_ar' => 'nullable|string|max:255',
            'hp_dimensions_volume_en' => 'nullable|string|max:255',
            'color' => 'nullable',
            'characteristics_ar' => 'nullable|array',
            'characteristics_ar.*' => 'exists:characteristics,id',
            'characteristics_en' => 'nullable|array',
            'characteristics_en.*' => 'exists:characteristics,id',
            'optional_features_ar' => 'nullable|string|max:255',
            'optional_features_en' => 'nullable|string|max:255',
            'best_selling' => 'nullable|boolean',
            'featured' => 'nullable|boolean',
            'recommended' => 'nullable|boolean',
            'power_supply' => 'nullable|string|max:100',
            'type_freon' => 'nullable|string|max:100',
            'technical_specifications' => 'nullable|string|max:255',
            'saso_certificate' => 'nullable|string',
        ]);

        // Manually encode arrays to JSON strings
        if (isset($data['color'])) {
            $data['color'] = json_encode($data['color']);
        }

        if (isset($data['characteristics_en'])) {
            $data['characteristics_en'] = json_encode($data['characteristics_en']);
        }

        if ($request->has('image')) {

            $imageName = uploadImage($request->file('image'));

            $data['image'] = $imageName;
        }
        try {
            Product::create($data);
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            \Log::error('Product creation failed: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Failed to create the product.']);
        }
        // Redirect back to the index page with a success message
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }


    public function edit(Product $product)
    {
        $categories = Category::where('level', 1)->where('active', true)->get();
        $characteristics = Characteristic::all(); // Replace with your characteristic model
        return view('admin.products.edit', compact('product', 'categories', 'characteristics'));
    }
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'type' => 'required|string|max:255',
            'product_name_ar' => 'required|string|max:255',
            'product_name_en' => 'required|string|max:255',
            'product_description_ar' => 'required|string|max:255',
            'product_description_en' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'nullable|exists:categories,id',
            'model_number' => 'nullable|string|max:100',
            'status' => 'nullable|string|max:50',
            'catalog' => 'nullable|file|mimes:pdf|max:2048',
            'hp_dimensions_volume_ar' => 'nullable|string|max:255',
            'hp_dimensions_volume_en' => 'nullable|string|max:255',
            // 'color' => 'nullable|array',
            'characteristics_ar' => 'nullable|array',
            'characteristics_ar.*' => 'exists:characteristics,id',
            'characteristics_en' => 'nullable|array',
            'characteristics_en.*' => 'exists:characteristics,id',
            'optional_features_ar' => 'nullable|string|max:255',
            'optional_features_en' => 'nullable|string|max:255',
            'best_selling' => 'nullable',
            'featured' => 'nullable',
            'recommended' => 'nullable',
            'power_supply' => 'nullable|string|max:100',
            'type_freon' => 'nullable|string|max:100',
            'technical_specifications' => 'nullable|string|max:255',
            'saso_certificate' => 'nullable|string',
        ]);
        // Manually encode arrays to JSON strings if needed
        // $data['color'] = $request->has('color') ? json_encode($data['color']) : null;
        $data['characteristics_en'] = $request->has('characteristics_en') ? json_encode($data['characteristics_en']) : null;
        $data['characteristics_ar'] = $request->has('characteristics_ar') ? json_encode($data['characteristics_ar']) : null;

        // Handle image update if provided
        if ($request->hasFile('image')) {
            // Delete previous image if exists
            if ($product->image && file_exists(storage_path("app/public/{$product->image}"))) {
                unlink(storage_path("app/public/{$product->image}"));
            }
            // Upload new image
            $imageName = uploadImage($request->file('image'));
            $data['image'] = $imageName;
        }

        // Update product with validated data
        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        // Delete associated image if exists
        if ($product->image && file_exists(storage_path("app/images/{$product->image}"))) {
            unlink(storage_path("app/images/{$product->image}"));
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }

    public function export()
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }


    public function storeCharacteristics(Request $request)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:svg,png|max:2048',
        ]);

        $imagePath = null;
        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('images', 'public');
        // }
        if ($request->has('image')) {

            $imageName = uploadImage($request->file('image'));

            $imagePath = $imageName;
        }

        Characteristic::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'image' => $imagePath,
            'image_type' => $request->file('image')->getClientOriginalExtension(),
        ]);
        // return redirect()->route('products.create')->with('success', 'Characteristic created successfully.');

    }

    public function importForm()
    {
        return view('admin.products.import'); // Make sure to create this view
    }

    public function import(Request $request)
    {
        $request->validate([
            'import_file' => 'required|file|mimes:xlsx',
        ]);

        Excel::import(new ProductsImport, $request->file('import_file'));

        return redirect()->route('products.index')->with('success', 'Products imported successfully.');
    }
}
