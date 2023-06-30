@extends('layouts.main')
@section('title', 'Anotação Completa')
@section('current-page-name', 'Anotação Completa')
@section('content')

<form action="{{ route('notes.update',$note->id) }}"  method="POST" class="form-note form-note-edit">
    @csrf
    @method('PUT')
    <input value="{{ $note->title }}"  readonly required type="text" id="input-title" class="form-control" placeholder="Titulo" name="title">

      <textarea  required name="content" class="edit">
        {{ $note->content }}
      </textarea>

      <div class="fixed-bottom-container">
        <div class="d-flex justify-content-end">
          <button id="toggleModeButton" type="button" class="btn btn-lg btn-primary">Editar</button>
        </div>
      </div>
</form>
@endsection
