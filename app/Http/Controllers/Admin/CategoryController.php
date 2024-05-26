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
        $query = Category::query();
    
        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where('name_ar', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('name_en', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('slug', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('id_path', 'LIKE', "%{$searchTerm}%");
        }
    
        $records = $query->latest()->paginate(EnumsSettings::Paginate);
    
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $records = Category::select('id', 'id_path', 'name_' . app()->getLocale() . ' as name', 'name_en', 'name_ar')->orderBy('level', 'asc')->get();

        // Return the view for editing a category
        return view('admin.categories.edit', compact('category' , 'records'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $record)
    {

        // Validate the incoming request data
        $validatedData =$request->validate([
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'parent_id' => 'nullable|exists:categories,id',
            'level' => 'integer',
            'id_path' => 'string',
            'slug' => 'nullable|string',
            'active' => 'boolean',
        ]);

        $record->fill($validatedData);

        if ($request->hasFile('image')) {
            $imageName = uploadImage($request->file('image'));
            $record->image = $imageName;
        }



        // Update the slug if necessary
        $slug = slugable($record->name_en);
        $record->update([
            'slug' => Category::whereSlug($slug)->where('id', '!=', $record->id)->exists() ? slugable($record->name_en, $record->id) : $slug,
        ]);

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
}
