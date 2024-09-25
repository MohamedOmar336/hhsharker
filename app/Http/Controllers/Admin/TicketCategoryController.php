<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TicketCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TicketCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = TicketCategory::query();

        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where('name', 'LIKE', "%{$searchTerm}%");
        }

        $totalResults = $query->count();

        $records = $query->latest()->paginate($totalResults);
        return view('admin.TicketCategories.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = TicketCategory::all();
        return view('admin.TicketCategories.create', compact('categories'));
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
            'parent_id' => 'nullable|exists:ticket_categories,id',
            'level' => 'integer',
            'id_path' => 'string',
            'slug' => 'nullable|string',
            'active' => 'boolean',
        ]);

        if ($request->has('image')) {
            $imageName = uploadImage($request->file('image'));
            $data['image'] = $imageName;
        }

        $record = TicketCategory::create($data);
        $slug = slugable($record->name_en);

        $record->update([
            'slug' => TicketCategory::whereSlug($slug)->where('id', '!=', $record->id)->exists() ? slugable($record->name_en, $record->id) : $slug,
        ]);

        session()->flash('success', __('messages.added_successfully'));

        return redirect()->route('ticket_categories.index')->with('success', 'Ticket category created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TicketCategory  $ticket_category
     * @return \Illuminate\Http\Response
     */
    public function edit(TicketCategory $ticket_category)
    {
        $ticketCategories = TicketCategory::all();
        return view('admin.TicketCategories.edit', compact('ticket_category', 'ticketCategories'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TicketCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TicketCategory $ticket_category)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'parent_id' => 'nullable|exists:ticket_categories,id',
            'active' => 'boolean',
        ]);
    
        $ticket_category->fill($validatedData);
    
        if ($request->hasFile('image')) {
            $imageName = uploadImage($request->file('image'));
            $ticket_category->image = $imageName;
        }
    
        // Update the slug if necessary
        $slug = slugable($ticket_category->name_en);
        $ticket_category->slug = TicketCategory::where('slug', $slug)->where('id', '!=', $ticket_category->id)->exists()
            ? slugable($ticket_category->name_en, $ticket_category->id)
            : $slug;
    
        $ticket_category->save();
    
        // Redirect back to the index page with a success message
        return redirect()->route('ticket_categories.index')->with('success', 'Ticket category updated successfully.');
    }
    
    // public function update(Request $request, TicketCategory $category)
    // {
    //     // Validate the incoming request data
    //     $validatedData = $request->validate([
    //         'name_ar' => 'required|string',
    //         'name_en' => 'required|string',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'parent_id' => 'nullable|exists:ticket_categories,id',
    //         'level' => 'integer',
    //         'id_path' => 'string',
    //         'slug' => 'nullable|string',
    //         'active' => 'boolean',
    //     ]);

    //     $category->fill($validatedData);

    //     if ($request->hasFile('image')) {
    //         $imageName = uploadImage($request->file('image'));
    //         $category->image = $imageName;
    //     }

    //     // Update the slug if necessary
    //     $slug = slugable($category->name_en);
    //     $category->slug = TicketCategory::whereSlug($slug)->where('id', '!=', $category->id)->exists() ? slugable($category->name_en, $category->id) : $slug;

    //     $category->save();

    //     return redirect()->route('ticket_categories.index')->with('success', 'Ticket category updated successfully.');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TicketCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = TicketCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('ticket_categories.index')->with('success', 'Ticket category deleted successfully.');
    }

    /**
     * Bulk delete ticket categories.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bulkDelete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:ticket_categories,id',
        ]);

        TicketCategory::whereIn('id', $request->ids)->delete();

        return redirect()->route('ticket_categories.index')->with('success', 'Ticket categories deleted successfully.');
    }
}
