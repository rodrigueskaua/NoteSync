@extends('layouts.main')
@section('title', 'Nova Anotação')
@section('current-page-name', 'Nova Anotação')
@section('content')

<form action="/notes" method="POST" class="form-note-create">
@csrf
  <input  required type="text" class="form-control" placeholder="Titulo" name="title">
  <textarea required name="content" class="editor">


  </textarea>

  <div class="fixed-bottom-container">
    <div class="d-flex justify-content-end">
      <button type="submit" class="btn btn-lg btn-primary">Enviar</button>
    </div>
  </div>
{{-- <div class="teste d-flex justify-content-end">
  <button class="btn btn-primary">voltar</button>

  <button type="submit" class="btn btn-primary">enviar</button>
</div> --}}
</form>
@endsection
