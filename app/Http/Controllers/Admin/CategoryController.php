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
        $data = $request->validate([
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'parent_id' => 'nullable',
            'level' => 'integer',
            'id_path' => 'string',
            'slug' => 'nullable|string',
            'active' => 'boolean',
        ]);
        $data = $request->all();

        if ($request->has('image')) {

            $imageName = uploadImage($request->file('image'));

            $data['image'] = $imageName;
        }

        $record = Category::create($data);

        $slug = slugable($record->name_en);

        $record->update([
            'slug' => Category::whereSlug($slug)->where('id', '!=', $record->id)->exists() ? slugable($record->name_en, $record->id) : $slug,
        ]);

        session()->flash('success', __('messages.added_successfully'));
        // Redirect back to the index page with a success message
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
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
