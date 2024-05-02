<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
<<<<<<< HEAD

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

=======
use App\Enums\EnumsSettings;
use App\Models\User;
use App\Notifications\AccountActivated;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $records = Product::latest()->paginate(EnumsSettings::Paginate);

        return view('admin.products.index', compact('records'));
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\View\View
     */
>>>>>>> 088d0899d75ec8799ed092a2bc34374d64b41f04
    public function create()
    {
        return view('admin.products.create');
    }

<<<<<<< HEAD
    public function store(Request $request)
    {
        $request->validate([
=======
    /**
     * Store a newly created product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate([
>>>>>>> 088d0899d75ec8799ed092a2bc34374d64b41f04
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
<<<<<<< HEAD
            'slug' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'is_available' => 'required|boolean',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.jpg'; // Provide a default image if no image is uploaded
        }

        Product::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'description_ar' => $request->description_ar,
            'description_en' => $request->description_en,
            'slug' => $request->slug,
            'price' => $request->price,
            'quantity' =>$request->quantity,
            'is_available' => $request->is_available,
            'image_url' => $imageName,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

=======
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'is_available' => 'nullable|boolean',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = $this->uploadImage($request->file('image'));


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
>>>>>>> 088d0899d75ec8799ed092a2bc34374d64b41f04
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

<<<<<<< HEAD
    public function update(Request $request, Product $product)
    {
        
        $product->name_ar = $request->name_ar;
        $product->name_en = $request->name_en;
        $product->description_ar = $request->description_ar;
        $product->description_en = $request->description_en;
        $product->slug = $request->slug;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->is_available = $request->is_available;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $product->image_url = $imageName;
        } else {
            // Keep the current image if no new image is uploaded
            $imageName = $product->image_url;
        }
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }
   

=======
    /**
     * Update the specified product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request , $id)
    {

        $record = Product::findOrFail($id);

        $validatedData = $request->validate([
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'is_available' => 'nullable|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $record->fill($validatedData);

        if ($request->hasFile('image')) {
            $imageName = $this->uploadImage($request->file('image'));
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
>>>>>>> 088d0899d75ec8799ed092a2bc34374d64b41f04
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
<<<<<<< HEAD
=======
    }

    /**
     * Uploads the image and returns the image name.
     *
     * @param  \Illuminate\Http\UploadedFile  $image
     * @return string
     */
    private function uploadImage($image)
    {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        return $imageName;
>>>>>>> 088d0899d75ec8799ed092a2bc34374d64b41f04
    }
}
