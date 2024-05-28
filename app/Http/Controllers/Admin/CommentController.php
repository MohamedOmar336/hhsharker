<?php
// app\Http\Controllers\admin\CommentController.php
namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $records = Comment::with('post')->get();
        return view('admin.comments.index', compact('records'));
    }

    public function create()
    {
        return view('admin.comments.create');
    }

    public function store(Request $request)
    {
        // Validate the request...
        $comment = Comment::create($request->all());
        return redirect()->route('comments.index')->with('success', 'Comment created successfully.');
    }

    public function show($id)
    {
        $comment = Comment::findOrFail($id);
        return view('admin.comments.show', compact('comment'));
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view('admin.comments.edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request...
        $comment = Comment::findOrFail($id);
        $comment->update($request->all());
        return redirect()->route('comments.index')->with('success', 'Comment updated successfully.');
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect()->route('comments.index')->with('success', 'Comment deleted successfully.');
    }
}
