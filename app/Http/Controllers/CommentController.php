<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    // Show all posts
    public function index() {
        $comments = Comment:orderBy('created_at', 'desc')->where('post_id','1')->get();
        return view('comment.index', ['comments' => $comments]);
      }
      
    // Create post
    public function create() {
        return view('comments.create');
    }
    // Store post
    public function store(Request $request) {
    // validations
    $request->validate([
      'description' => 'required',
    ]);
  
    $comment = new Comment;

    $comment->description = $request->description;
  
    $comment->save();
    return redirect()->route('comments.index')->with('success', 'Comment created successfully.');
  }
}
