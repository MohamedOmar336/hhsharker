<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Enums\EnumsSettings;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $query = Category::query()->with('children');

    if ($request->has('search')) {
        $query->where('name_ar', 'LIKE', "%{$request->search}%")
            ->orWhere('name_en', 'LIKE', "%{$request->search}%");
    }

    $records = $query->paginate(500);

    return view('admin.categories.index', compact('records'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $records = Category::select('id', 'id_path', 'name_' . app()->getLocale() . ' as name', 'name_en', 'name_ar')->orderBy('level', 'asc')->get();
        // Return the view for creating a new category
        return view('admin.categories.create', compact('records'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data.
        $validatedData = $request->validate([
            'product_type' => 'required|string|max:255',
            'product_name_ar' => 'required|string|max:255',
            'product_name_en' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'nullable|exists:categories,id',
            'model_number' => 'nullable|string|max:100',
            'status' => 'nullable|string|max:50',
            'catalog' => 'nullable|file|mimes:pdf|max:2048',
            'hp_dimensions_volume_ar' => 'nullable|string|max:255',
            'hp_dimensions_volume_en' => 'nullable|string|max:255',
            'color' => 'nullable|array',
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
        dd($validatedData);
        // Handle image upload if present
        if ($request->hasFile('image')) {
            $imageName = uploadImage($request->file('image'));
            $validatedData['image'] = $imageName;
        }
        dd($validatedData);
        // Create a new Product instance and fill it with validated data
        Product::create($validatedData);
    
        // Debugging: Dump and die to inspect validated data
        dd($validatedData);
    
        // Redirect back to the index page with a success message
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
    


    public function edit(Category $category)
{
    $records = Category::select('id', 'name_' . app()->getLocale() . ' as name')->orderBy('id', 'asc')->get();

    // Return the view for editing a category
    return view('admin.categories.edit', compact('category', 'records'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'parent_id' => 'nullable|exists:categories,id',
            'active' => 'boolean',
        ]);
    
        $category->fill($validatedData);
    
        if ($request->hasFile('image')) {
            $imageName = uploadImage($request->file('image'));
            $category->image = $imageName;
        }
    
        // Update the slug if necessary
        $slug = slugable($category->name_en);
        $category->slug = Category::where('slug', $slug)->where('id', '!=', $category->id)->exists() ? slugable($category->name_en, $category->id) : $slug;
    
        $category->save();
    
        // Redirect back to the index page with a success message
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        // Delete the specified category record from the database
        $category->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }

    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids', []);
        // Add your bulk update logic here
        // For example, updating a specific field for all selected records
        Category::whereIn('id', $ids)->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }

}
