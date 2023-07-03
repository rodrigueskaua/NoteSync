@extends('layouts.main')
@section('title', 'Nova Anotação')
@section('current-page-name', 'Nova Anotação')
@section('content')

<form action="{{ route('notes.store') }}" method="POST" class="form-note">
@csrf
  <input  required type="text" class="form-control" placeholder="Titulo" name="title">
  <textarea required name="content" class="create">
  </textarea>

  <div class="fixed-bottom-container">
    <div class="d-flex justify-content-end">
      <button type="submit" class="btn btn-lg btn-primary">Enviar</button>
    </div>
  </div>
</form>

@section('ckeditor')
    {{-- Script Dependency CKEditor --}}
    <script src="/js/vendor/ckeditor/build/ckeditor.js"></script>
	{{-- Script CKEditor --}}
	<script src="/js/CKEditor.js"></script>
@endsection
@endsection
