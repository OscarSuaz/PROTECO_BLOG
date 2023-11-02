@extends('layouts.app')
@section('content')
<div class="container">
  <div class="titlebar">
    <a class="btn btn-secondary float-end mt-3" href="{{ route('comments.create') }}" role="button">Add Comment</a>
    <h1>Comment list</h1>
  </div>
    
  <hr>
  <!-- Message if a post is posted successfully -->
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif
         @if (count($comments) > 0)
    @foreach ($comments as $comment)
      <div class="row">
        <div class="col-12">
          <p>Calidad General: {{ $comment->calidad_general }}</p>
          <p>Facilidad: {{ $comment->facilidad }}</p>
          <p>Clase: {{ $comment->clase }}</p>
          <p>Calificación Recibida: {{ $comment->calificacion_recibida }}</p>
          <p>{{$comment->description}}</p>
          <hr>
        </div>
      </div>
    @endforeach
  @else
    <p>No Posts found</p>
  @endif
</div>
@endsection