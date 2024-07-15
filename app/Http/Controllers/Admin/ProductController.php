<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Characteristic;
use App\Models\Product;
use App\Models\Category;
use App\Enums\EnumsSettings;
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;
use function Psy\debug;
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
    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'description' => 'nullable|string',
    //         'permission_type' => 'nullable|string',
    //         'permissions' => 'nullable|array',
    //     ]);

    //     $role = Roles::create($validatedData);
    //     return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            // add back any other required validation rules
        ]);

        // Assuming 'characteristics_en' and 'characteristics_ar' are the only array expected fields:
        $data = $request->except('_token');

        // Manually encode arrays to JSON strings
        if (isset($data['color'])) {
            $data['color'] = json_encode($data['color']);
        }
        if (isset($data['characteristics_en'])) {
            $data['characteristics_en'] = json_encode($data['characteristics_en']);
        }

        // Create a new Product instance and fill it with validated data
        $product = Product::create($data);

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

        $request->validate([
            'type' => 'required|string|max:255',
            // add back any other required validation rules
        ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

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

    public function export()
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }

}
