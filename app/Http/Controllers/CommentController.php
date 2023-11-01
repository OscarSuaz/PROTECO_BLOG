<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index() {
        $comments = Comment::orderBy('created_at', 'desc')->where('post_id','1')->get();
        return view('comments.index', ['comments' => $comments]);
    }

    public function create(){
        return view('comments.create');
    }

    public function store(Request $request) {
        // validations
        $request->validate([
          'description' => 'required',
        ]);
      
        $comment = new Comment;
      
        $comment->description = $request->description;
        $comment->post_id='1';
        $comment->user_id='1';
      
        $comment->save();
        return redirect()->route('comments.index')->with('success', 'Comment created successfully.');
      }


/*     public function admin(){
        $admin=get('admin');
        if ($admin == '1'){
            return view('vitaadmin');
        }else{
            return view('vistauser');
        }
    } */

}
