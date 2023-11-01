<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    // Show all posts
    public function index() {
        $comments = Comment::orderBy('created_at', 'asc')->where('post_id','2')->get();
        return view('comments.index', ['comments' => $comments]);
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
    $comment->post_id ='2';
    $comment->user_id ='1';
  
    $comment->save();
    return redirect()->route('comments.index')->with('success', 'Comment created successfully.');
  }
}
