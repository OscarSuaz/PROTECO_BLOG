@extends('layouts.app')
@section('content')
<div class="container">
  <h1>Add Comment</h1>
  <section class="mt-3">
    <form method="post" action="{{ route('comments.store') }}" enctype="multipart/form-data">
      @csrf
      <!-- Error message when data is not inputted -->
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div class="card p-3">
        <label for="floatingTextArea">Calidad General</label>
        <input type ="float" class="form-control" name="calidad_general" id="floatingInput" cols="30" rows="10"></textarea>
        <label for="floatingTextArea">Facilidad</label>
        <input type ="number" name="facilidad" id="floatingInput" cols="30" rows="10"></textarea>
        <label for="floatingTextArea">Clase</label>
        <textarea class="form-control" name="clase" id="floatingTextarea" cols="30" rows="10"></textarea>
        <label for="floatingTextArea">Calificacion Recibida</label>
        <input type ="number" name="calificacion_recibida" id="floatingInput" cols="30" rows="10"></textarea>
        <label for="floatingTextArea">Descripcion</label>
        <textarea class="form-control" name="description" id="floatingTextarea" cols="30" rows="10"></textarea>
      </div>
      <button class="btn btn-secondary m-3">Enviar</button>
    </form>
  </section>
    
</div>
@endsection