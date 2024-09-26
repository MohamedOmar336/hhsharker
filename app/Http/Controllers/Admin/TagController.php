<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Enums\EnumsSettings;

class TagController extends Controller
{
    /**
     * Display a listing of the tags.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {    $query = Tag::query();

        if ($request->has('search')) {
            $query->where('name_ar', 'LIKE', "%{$request->search}%")
                ->orWhere('name_en', 'LIKE', "%{$request->search}%")
                ->orWhere('description_ar', 'LIKE', "%{$request->search}%")
                ->orWhere('description_en', 'LIKE', "%{$request->search}%");
        }

        $totalResults = $query->count();

    $records = $query->latest()->paginate($totalResults);
        return view('admin.tags.index', compact('records'));
    }

    /**
     * Show the form for creating a new tag.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created tag in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required|string|max:255', 
            'name_ar' => 'required|string|max:255',
        ]);
       // Create a tag using only validated data
    $tag = Tag::create($request->only(['name_en', 'name_ar']));

      
    return redirect()->route('tags.index')->with('success', __('messages.tag_created_successfully'));

    }

    /**
     * Display the specified tag.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $tag = Tag::findOrFail($id);
        return view('admin.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified tag.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified tag in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // Validate the request...
        $tag = Tag::findOrFail($id);
        $tag->update($request->all());
       
    return redirect()->route('tags.index')->with('success', __('messages.tag_updated_successfully'));

    }

    /**
     * Remove the specified tag from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return redirect()->route('tags.index')->with('success', __('messages.tag_deleted_successfully'));
    }


    /**
 * Remove multiple tags from storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\RedirectResponse
 */
public function bulkDelete(Request $request)
{
    $request->validate([
        'ids' => 'required|array',
        'ids.*' => 'exists:tags,id', // Validate each ID
    ]);

   //destroy($request->ids); // Bulk delete the tags
   Tag::whereIn('id', $request->input('ids'))->delete();
    
   return redirect()->route('tags.index')->with('success', __('messages.selected_tags_deleted_successfully'));

}

}
