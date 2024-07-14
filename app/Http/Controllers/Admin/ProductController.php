<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Enums\EnumsSettings;
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;

use function Psy\debug;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $categories = Category::all();
        $query = Product::query();

        if ($request->has('search')) {
            $query->where('name_ar', 'LIKE', "%{$request->search}%")
                ->orWhere('name_en', 'LIKE', "%{$request->search}%")
                ->orWhere('description_ar', 'LIKE', "%{$request->search}%")
                ->orWhere('description_en', 'LIKE', "%{$request->search}%");
        }

        $records = $query->paginate(500);

        return view('admin.products.index', compact('records','categories'));
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'model_number' => 'nullable|string',
            'power_supply' => 'nullable|string',
            'type_of_freon' => 'nullable|string',
            'characteristics_en' => 'nullable|string',
            'characteristics_ar' => 'nullable|string',
            'optional_features_en' => 'nullable|string',
            'optional_features_ar' => 'nullable|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'is_available' => 'nullable|boolean',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $imageName = uploadImage($request->file('image'));
        $data['image_url'] = $imageName;

        $record = Product::create($data);

        $slug = slugable($record->name_en);
        $record->update([
            'slug' => Product::whereSlug($slug)->where('id', '!=', $record->id)->exists() ? slugable($record->name_en, $record->id) : $slug,
        ]);

        session()->flash('success', __('messages.added_successfully'));

        return redirect()->route('products.index');
    }


    /**
     * Show the form for editing the specified product.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $record = Product::findOrFail($id);

        $validatedData = $request->validate([
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'model_number' => 'nullable|string',
            'power_supply' => 'nullable|string',
            'type_of_freon' => 'nullable|string',
            'characteristics_en' => 'nullable|string',
            'characteristics_ar' => 'nullable|string',
            'optional_features_en' => 'nullable|string',
            'optional_features_ar' => 'nullable|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'is_available' => 'nullable|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $record->fill($validatedData);

        if ($request->hasFile('image')) {
            $imageName = uploadImage($request->file('image'));
            $record->image_url = $imageName;
        }

        $record->save();

        // Update the slug if necessary
        $slug = slugable($record->name_en);
        $record->update([
            'slug' => Product::whereSlug($slug)->where('id', '!=', $record->id)->exists() ? slugable($record->name_en, $record->id) : $slug,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified product from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }


    /**
     * Mass Delete the products.
     *
     * @return \Illuminate\Http\Response
    **/
    public function massDestroy()
    {
        $recordIds = request()->input('ids');

        foreach ($recordIds as $recordId) {
            $record = Product::find($recordId);

            if (isset($record)) {
                $record->delete($recordId);
            }
        }
        return redirect()->route('products.index')
            ->with('success', 'Products deleted successfully.');
    }

    public function export()
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }

}
