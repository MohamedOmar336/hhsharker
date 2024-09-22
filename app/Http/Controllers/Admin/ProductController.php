<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Characteristic;
use App\Models\Product;
use App\Models\Category;
use App\Enums\EnumsSettings;
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


use function PHPSTORM_META\type;
use function Psy\debug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Imports\ProductsImport;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $characteristics = Characteristic::all();
        $query = Product::orderBy('created_at', 'desc');

        // Apply filter only if 'name' is not empty
        if ($request->has('name') && $request->name != '') {
            $query->where('product_name_en', 'like', '%' . $request->name . '%')
                ->orWhere('product_name_ar', 'like', '%' . $request->name . '%');
        }

        // Apply filter only if 'category_id' is not empty
        if ($request->has('category_id') && $request->category_id != '') {
            $query->where('category_id', $request->category_id);
        }

        // Apply filter only if 'status' is not empty
        if ($request->has('status') && $request->status != '') {
            $query->where('status', 'like', '%' . $request->status . '%');
        }

        $records = $query->paginate();
        // dd($records , $request->all());
        $categories = Category::all(); // Assuming you want to filter by categories too
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
            'characteristics' => 'nullable|array',
            'characteristics.*.Characteristic_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'characteristics.*.Characteristic_name_en' => 'required_with:characteristics|string|max:255',
            'characteristics.*.Characteristic_name_ar' => 'required_with:characteristics|string|max:255',
            'characteristics.*.Characteristic_description_en' => 'nullable|string|max:255',
            'characteristics.*.Characteristic_description_ar' => 'nullable|string|max:255',
        ]);

        // Handle product image upload
        if ($request->has('image')) {
            $imageName = $request->file('image')->store('product_images', 'public');
            $data['image'] = $imageName;
        }

        // Handle product catalog upload
        if ($request->has('catalog')) {
            $catalogName = $request->file('catalog')->store('product_catalogs', 'public');
            $data['catalog'] = $catalogName;
        }

        // Store product data
        try {
            $product = Product::create($data);
        } catch (\Exception $e) {
            \Log::error('Product creation failed: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Failed to create the product.']);
        }

        // Handle characteristics data
        
            foreach ($request->characteristics as $characteristicData) {
                $imagePath = null;
                if (isset($characteristicData['Characteristic_file'])) {
                    $imagePath = $characteristicData['Characteristic_file']->store('characteristics_images', 'public');
                }

                Characteristic::create([
                    'product_id' => $product->id,
                    'image' => $imagePath,
                    'Characteristic_name_en' => $characteristicData['Characteristic_name_en'],
                    'Characteristic_name_ar' => $characteristicData['Characteristic_name_ar'],
                    'Characteristic_description_en' => $characteristicData['Characteristic_description_en'],
                    'Characteristic_description_ar' => $characteristicData['Characteristic_description_ar'],
                ]);
            }
       

        // Redirect with success message
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    


    public function edit(Product $product)
{
    $categories = Category::where('level', 1)->where('active', true)->get();

    // Get characteristics that belong to the specific product
    $characteristics = Characteristic::where('product_id', $product->id)->get();

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
        'optional_features_ar' => 'nullable|string|max:255',
        'optional_features_en' => 'nullable|string|max:255',
        'best_selling' => 'nullable',
        'featured' => 'nullable',
        'recommended' => 'nullable',
        'power_supply' => 'nullable|string|max:100',
        'type_freon' => 'nullable|string|max:100',
        'technical_specifications' => 'nullable|string|max:255',
        'saso_certificate' => 'nullable|string',
        'characteristics' => 'nullable|array',
        'characteristics.*.Characteristic_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'characteristics.*.Characteristic_name_en' => 'required_with:characteristics|string|max:255',
        'characteristics.*.Characteristic_name_ar' => 'required_with:characteristics|string|max:255',
        'characteristics.*.Characteristic_description_en' => 'nullable|string|max:255',
        'characteristics.*.Characteristic_description_ar' => 'nullable|string|max:255',
    ]);
  // Handle image updates if necessary
  if ($request->hasFile('image')) {
    if ($product->image && file_exists(storage_path("app/public/{$product->image}"))) {
        unlink(storage_path("app/public/{$product->image}"));
    }
    $data['image'] = $request->file('image')->store('products', 'public');
}

// Update product details
$product->update($data);

// Handle characteristics updates
if ($request->has('characteristics')) {
    $existingCharacteristics = $product->characteristics->keyBy('id');
    $updatedCharacteristics = [];

    foreach ($request->input('characteristics') as $index => $characteristic) {
        $charData = [
            'Characteristic_name_en' => $characteristic['Characteristic_name_en'],
            'Characteristic_name_ar' => $characteristic['Characteristic_name_ar'],
            'Characteristic_description_en' => $characteristic['Characteristic_description_en'] ?? null,
            'Characteristic_description_ar' => $characteristic['Characteristic_description_ar'] ?? null,
        ];

        if (isset($characteristic['Characteristic_file']) && $characteristic['Characteristic_file']->isValid()) {
            $charData['Characteristic_file'] = $characteristic['Characteristic_file']->store('characteristics_files', 'public');
        }

        if (isset($characteristic['id']) && $existingCharacteristics->has($characteristic['id'])) {
            $existingCharacteristics[$characteristic['id']]->update($charData);
            $updatedCharacteristics[] = $characteristic['id'];
        } else {
            $charData['product_id'] = $product->id;
            $newCharacteristic = Characteristic::create($charData);
            $updatedCharacteristics[] = $newCharacteristic->id;
        }
    }

    // Remove characteristics that were not updated
    $characteristicsToDelete = $existingCharacteristics->keys()->diff($updatedCharacteristics);
    Characteristic::whereIn('id', $characteristicsToDelete)->delete();
}

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


    // public function storeCharacteristics(Request $request)
    // {
    //     $request->validate([
    //         'name_en' => 'required|string|max:255',
    //         'name_ar' => 'required|string|max:255',
    //         'image' => 'nullable|image|mimes:svg,png|max:2048',
    //     ]);

    //     $imagePath = null;
    //     // if ($request->hasFile('image')) {
    //     //     $imagePath = $request->file('image')->store('images', 'public');
    //     // }
    //     if ($request->has('image')) {

    //         $imageName = uploadImage($request->file('image'));

    //         $imagePath = $imageName;
    //     }

    //     Characteristic::create([
    //         'name_en' => $request->name_en,
    //         'name_ar' => $request->name_ar,
    //         'image' => $imagePath,
    //         'image_type' => $request->file('image')->getClientOriginalExtension(),
    //     ]);
    //     // return redirect()->route('products.create')->with('success', 'Characteristic created successfully.');

    // }

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

    public function bulkDelete(Request $request)
{
    $request->validate([
        'ids' => 'required|array',
        'ids.*' => 'exists:products,id', // Adjust to your model name
    ]);

    // Perform the deletion
    Product::whereIn('id', $request->input('ids'))->delete();

    return redirect()->route('products.index')->with('success', 'Selected products deleted successfully.');
}
}
