<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\User;
use App\Models\Tag;
use App\Models\BlogPostTag; // Include the BlogPostTag model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogPostController extends Controller
{
    // Other methods remain the same...

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

        // Create the blog post
        $post = BlogPost::create($validatedData);

        // Attach tags
            foreach ($request->input('tags') as $tagId) {
                BlogPostTag::create([
                    'blog_post_id' => $post->id,
                    'tag_id' => $tagId,
                ]);
          
        }


        return redirect()->route('blogposts.index')->with('success', 'Post created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
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

        $post->save();

        // Sync tags
        if ($request->has('tags')) {
            $post->tags()->sync($request->input('tags'));
        } else {
            $post->tags()->detach(); // Remove all tags if none are provided
        }

        return redirect()->route('blogposts.index')->with('success', 'Post updated successfully.');
    }


    public function index()
    {
        $posts = BlogPost::all();
        return view('admin.blogposts.index', compact('posts'));
    }

    public function create()
    {
        $authors = User::all();
        $tags = Tag::all();
        return view('admin.blogposts.create', compact('authors', 'tags'));
    }

 /*   public function store(Request $request)
{
    // Validation rules
    $validatedData = $request->validate([
        'title_en' => 'required|string|max:255',
        'title_ar' => 'required|string|max:255',
        'content_en' => 'required|string',
        'content_ar' => 'required|string',
        'author_id' => 'required|exists:users,id',
        'status' => 'required|in:draft,published',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'tags' => 'nullable|array', // Tags should be submitted as an array
       
    ]);

    // Handle image upload
  //  $image = $request->hasFile('image') ? $request->file('image')->store('images', 'public') : null;

    // Serialize tags array if present
    $tags = $request->input('tags') ? serialize($request->input('tags')) : null;
    $validatedData['post_date'] = now();

    // Create the blog post
   /* $post = BlogPost::create([
        'title_en' => $validatedData['title_en'],
        'title_ar' => $validatedData['title_ar'],
        'content_en' => $validatedData['content_en'],
        'content_ar' => $validatedData['content_ar'],
        'author_id' => $validatedData['author_id'],
        'status' => $validatedData['status'],
        'image' => $image,
        'post_date' => now(),
        'tags' => $tags,
    ]);*/
 /*   $imageName = uploadImage($request->file('image'));

    $validatedData['image'] = $imageName;

        $record = BlogPost::create($validatedData);

        
    // Redirect back with success message
    return redirect()->route('blogposts.index')->with('success', 'Post created successfully.');
}*/
    
public function edit($id)
{
    $post = BlogPost::findOrFail($id);
    $tags = Tag::all();
    $authors = User::all();
    $postTags = $post->tags;
    return view('admin.blogposts.edit', compact('post', 'authors', 'tags', 'postTags'));
}

/*public function update(Request $request, $id)
{
    $request->validate([
        'title_en' => 'required|string|max:255',
        'title_ar' => 'required|string|max:255',
        'content_en' => 'required|string',
        'content_ar' => 'required|string',
        'author_id' => 'required|exists:users,id',
        'status' => 'required|in:draft,published',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'tags' => 'array', // Tags should be submitted as an array
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

    // Update the tags
    $tags = $request->input('tags') ? serialize($request->input('tags')) : null;
    $post->tags = $tags;

    $post->save();

    return redirect()->route('blogposts.index')->with('success', 'Post updated successfully.');
}
*/
    public function show($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('admin.blogposts.show', compact('post'));
    }
    


    public function destroy($id)
    {
        $post = BlogPost::findOrFail($id);
        if ($post->image) {
            Storage::delete($post->image);
        }
        $post->delete();
        return redirect()->route('blogposts.index')->with('success', 'Post deleted successfully.');
    }
}
