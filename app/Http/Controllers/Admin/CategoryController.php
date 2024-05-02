<<<<<<< HEAD
<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_ar' => 'required|string|max:191',
            'name_en' => 'required|string|max:191',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'parent_id' => 'nullable|exists:categories,id',
            'level' => 'integer|min:1',
            'id_path' => 'string|max:191',
            'slug' => 'nullable|string|max:191|unique:categories',
            'active' => 'boolean',
           
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.jpg'; // Provide a default image if no image is uploaded
        }
       
        category::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'parent_id' => $request->parent_id ?? 0,
            'level' => $request->level ?? 1,
            'id_path' => $request->id_path ?? '1',
            'slug' => $request->slug,
            'active' => $request->active ?? true,
            'image' => $imageName,
        ]);




        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

  

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name_ar' => 'required|string|max:191',
            'name_en' => 'required|string|max:191',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'parent_id' => 'nullable|exists:categories,id',
            'level' => 'integer|min:1',
            'id_path' => 'string|max:191',
            'slug' => 'nullable|string|max:191|unique:categories,slug,'.$category->id,
            'active' => 'boolean',
        ]);

        $category->name_ar = $request->name_ar;
        $category->name_en = $request->name_en;
        $category->parent_id = $request->parent_id ?? 0;
        $category->level = $request->level ?? 1;
        $category->id_path = $request->id_path ?? '1';
        $category->slug = $request->slug;
        $category->active = $request->active ?? true;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $category->image = $imageName;
        } else {
            
            $imageName = $category->image;
        }

       

        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
=======
<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_ar' => 'required|string|max:191',
            'name_en' => 'required|string|max:191',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'parent_id' => 'nullable|exists:categories,id',
            'level' => 'integer|min:1',
            'id_path' => 'string|max:191',
            'slug' => 'nullable|string|max:191|unique:categories',
            'active' => 'boolean',

        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.jpg'; // Provide a default image if no image is uploaded
        }

        category::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'parent_id' => $request->parent_id ?? 0,
            'level' => $request->level ?? 1,
            'id_path' => $request->id_path ?? '1',
            'slug' => $request->slug,
            'active' => $request->active ?? true,
            'image' => $imageName,
        ]);




        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }



    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name_ar' => 'required|string|max:191',
            'name_en' => 'required|string|max:191',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'parent_id' => 'nullable|exists:categories,id',
            'level' => 'integer|min:1',
            'id_path' => 'string|max:191',
            'slug' => 'nullable|string|max:191|unique:categories,slug,'.$category->id,
            'active' => 'boolean',
        ]);

        $category->name_ar = $request->name_ar;
        $category->name_en = $request->name_en;
        $category->parent_id = $request->parent_id ?? 0;
        $category->level = $request->level ?? 1;
        $category->id_path = $request->id_path ?? '1';
        $category->slug = $request->slug;
        $category->active = $request->active ?? true;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $category->image = $imageName;
        } else {

            $imageName = $category->image;
        }



        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
>>>>>>> 088d0899d75ec8799ed092a2bc34374d64b41f04
