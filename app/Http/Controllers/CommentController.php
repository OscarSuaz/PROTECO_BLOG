<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    // Show all comments
    public function index() {
      $valor =request()->query('post');
        $comments = Comment::orderBy('created_at', 'asc')->where('post_id',$valor)->get();
        return view('comments.index', ['comments' => $comments])->with('valor',$valor);
      }
      
    // Create commet
    public function create() {
      $valor =request()->query('post');
        return view('comments.create')->with('valor',$valor);
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
      'calificacion_recibida' => 'required',
      'post_id' => 'required'
    ]);
    
    $comment = new Comment;
    $autor = auth()->user()->id;
    $comment->post_id =$request->post_id;
    $comment->user_id =$autor;
    $comment->calidad_general = $request->calidad_general;
    $comment->facilidad = $request->facilidad;
    $comment->clase = $request->clase;
    $comment->calificacion_recibida = $request->calificacion_recibida;
    $comment->description = $request->description;
    $comment->nombre_becario=$request->nombre_becario;

    $comment->save();
    return redirect()->route('comments.index')->with('success', 'Comment created successfully.');
  }
}
