<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::orderBy('created_at', 'desc')->get(); // Mengambil semua komentar, diurutkan dari yang terbaru
        return view('comments', ['comments' => $comments]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'feedback' => 'required|string|max:255',
        ]);

        Comment::create([
            'feedback' => $request->feedback,
        ]);

        return back()->with('success', 'Comment submitted successfully.');
    }

    public function showComments()
    {
        $comments = Comment::all(); // Mengambil semua komentar dari model Comment
        return view('comments', ['comments' => $comments]);
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return redirect()->back()->with('error', 'Comment not found.');
        }

        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully.');
    }
}



