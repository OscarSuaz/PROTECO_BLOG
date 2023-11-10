<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    // Show all comments
    public function index() {
        $comments = Comment::orderBy('created_at', 'asc')->where('post_id','2')->get();
        return view('comments.index', ['comments' => $comments]);
      }
      
    // Create commet
    public function create() {
        return view('comments.create');
    }
    // Store comment
    public function store(Request $request) {
    // validations
    $request->validate([
      'description' => 'required',
      'nombre_becario' => 'required',
      'calidad_general' => 'required',
      'facilidad' => 'required',
      'clase' => 'required',
      'calificacion_recibida' => 'required'
    ]);
  
    $comment = new Comment;
    $autor = auth()->user()->id;
    
    $comment->post_id ='2';
    $comment->user_id ='1';
    $comment->calidad_general = $request->calidad_general;
    $comment->facilidad = $request->facilidad;
    $comment->clase = $request->clase;
    $comment->calificacion_recibida = $request->calificacion_recibida;
    $comment->description = $request->description;

    $comment->save();
    return redirect()->route('comments.index')->with('success', 'Comment created successfully.');
  }
}
