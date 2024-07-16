<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Characteristic;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Storage;

class CharacteristicController extends Controller
{
    public function index(Request $request)
{
    $query = Characteristic::query();

    if ($request->has('search')) {
        $query->where('name_ar', 'LIKE', "%{$request->search}%")
              ->orWhere('name_en', 'LIKE', "%{$request->search}%");
    }

    $characteristics = $query->paginate(100);

    return view('admin.characteristics.index', compact('characteristics'));
}


    public function create()
    {
        return view('admin.characteristics.create');
    }

    public function store(Request $request)
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

        return redirect()->route('characteristics.index')->with('success', 'Characteristic created successfully.');
    }

    public function show(Characteristic $characteristic)
    {
        return view('characteristics.show', compact('characteristic'));
    }

    public function edit(Characteristic $characteristic)
    {
        return view('admin.characteristics.edit', compact('characteristic'));
    }

    public function update(Request $request, Characteristic $characteristic)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:svg,png|max:2048',
        ]);

        $imagePath = $characteristic->image;
        if ($request->hasFile('image')) {
            if ($imagePath) {
                Storage::disk('public')->delete($imagePath);
            }
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $characteristic->update([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'image' => $imagePath,
            'image_type' => $request->file('image')->getClientOriginalExtension(),
        ]);

        return redirect()->route('characteristics.index')->with('success', 'Characteristic updated successfully.');
    }

    public function destroy(Characteristic $characteristic)
    {
        // if ($characteristic->image) {
        //     Storage::disk('public')->delete($characteristic->image);
        // }
        $characteristic->delete();

        return redirect()->route('characteristics.index')->with('success', 'Characteristic deleted successfully.');
    }

    public function list()
{
    $characteristics = Characteristic::all();
    return response()->json($characteristics);
}

}