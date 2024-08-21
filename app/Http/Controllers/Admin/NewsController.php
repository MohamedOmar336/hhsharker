<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Enums\EnumsSettings;

class NewsController extends Controller
{
    /**
     * Display a listing of the news.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $query = News::query();

        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where('title_en', 'LIKE', "%{$searchTerm}%")
                ->orWhere('title_ar', 'LIKE', "%{$searchTerm}%")
                ->orWhere('content_en', 'LIKE', "%{$searchTerm}%")
                ->orWhere('content_ar', 'LIKE', "%{$searchTerm}%");
        }

        $records = $query->latest()->paginate(EnumsSettings::Paginate);

        return view('admin.news.index', compact('records'));
    }

    /**
     * Show the form for creating a new news item.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $authors = User::all();
        return view('admin.news.create', compact('authors'));
    }

    /**
     * Store a newly created news item in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'content_en' => 'required|string',
            'content_ar' => 'required|string',
            'author_id' => 'required|exists:users,id',
            'status' => 'required|in:draft,published',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = uploadImage($request->file('image'));
            $validatedData['image'] = $imageName;
        }

        $validatedData['post_date'] = now();

        $news = News::create($validatedData);

        return redirect()->route('news.index')->with('success', 'News item created successfully.');
    }

    /**
     * Show the form for editing the specified news item.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        $authors = User::all();
        return view('admin.news.edit', compact('news', 'authors'));
    }

    /**
     * Update the specified news item in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'content_en' => 'required|string',
            'content_ar' => 'required|string',
            'author_id' => 'required|exists:users,id',
            'status' => 'required|in:draft,published',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $newsItem = News::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($newsItem->image) {
                Storage::delete($newsItem->image);
            }
            $image = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $image;
        }

        $newsItem->update($validatedData);

        return redirect()->route('news.index')->with('success', 'News item updated successfully.');
    }

    /**
     * Remove the specified news item from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $newsItem = News::findOrFail($id);
        if ($newsItem->image) {
            Storage::delete($newsItem->image);
        }
        $newsItem->delete();
        return redirect()->route('news.index')->with('success', 'News item deleted successfully.');
    }

    /**
     * Display the specified news item.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $newsItem = News::findOrFail($id);
        return view('admin.news.show', compact('newsItem'));
    }
}
