<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\User;
use App\Models\Tag;
//use App\Models\BlogPostTag; // Include the BlogPostTag model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Enums\EnumsSettings;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the blog posts.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request)
{
    $query = BlogPost::query();

    if ($request->has('search')) {
        $searchTerm = $request->search;
        $query->where('title_en', 'LIKE', "%{$searchTerm}%")
              ->orWhere('title_ar', 'LIKE', "%{$searchTerm}%")
              ->orWhere('content_en', 'LIKE', "%{$searchTerm}%")
              ->orWhere('content_ar', 'LIKE', "%{$searchTerm}%");
    }

    $records = $query->latest()->paginate(EnumsSettings::Paginate);

    return view('admin.blogposts.index', compact('records'));
}

    /**
     * Show the form for creating a new blog post.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $authors = User::all();
        $tags = Tag::latest()->paginate(EnumsSettings::Paginate);;
        return view('admin.blogposts.create', compact('authors', 'tags'));
    }

    /**
     * Store a newly created blog post in storage.
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
            'tags' => 'nullable|array',
        ]);

        $imageName = uploadImage($request->file('image'));
        $validatedData['image'] = $imageName;
        $validatedData['post_date'] = now();

        $post = BlogPost::create($validatedData);
       /*
        foreach ($request->input('tags') as $tagId) {
            BlogPostTag::create([
                'blog_post_id' => $post->id,
                'tag_id' => (int) $tagId,
            ]);
        }*/
        return redirect()->route('blogposts.index')->with('success', 'Post created successfully.');
    }

    /**
     * Show the form for editing the specified blog post.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $post = BlogPost::findOrFail($id);
        $tags = Tag::all();
        $authors = User::all();
        $postTags = $post->tags;
        return view('admin.blogposts.edit', compact('post', 'authors', 'tags', 'postTags'));
    }

    /**
     * Update the specified blog post in storage.
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
            'tags' => 'array',
        ]);

        $post = BlogPost::findOrFail($id);

        $post->title_en = $request->title_en;
        $post->title_ar = $request->title_ar;
        $post->content_en = $request->content_en;
        $post->content_ar = $request->content_ar;
        $post->author_id = $request->author_id;
        $post->status = $request->status;

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::delete($post->image);
            }
            $image = $request->file('image')->store('images', 'public');
            $post->image = $image;
        }
        // if ($request->has('tags')) {
        //     $post->tags()->sync($request->tags);
        // } else {
        //     $post->tags()->sync([]); // Clear tags if none are provided
        // }

       // $post->save();
       $post->update($validatedData);
       

        return redirect()->route('blogposts.index')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified blog post from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $post = BlogPost::findOrFail($id);
        if ($post->image) {
            Storage::delete($post->image);
        }
        $post->delete();
        return redirect()->route('blogposts.index')->with('success', 'Post deleted successfully.');
    }

    /**
     * Display the specified blog post.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('admin.blogposts.show', compact('post'));
    }
}