@php
  use App\Helpers\TextHelper;
@endphp

@extends('layouts.main')
@section('title', 'Suas Anotações')
@section('current-page-name', 'Suas Anotações')
@section('messages')
<div class="alerts-container row justify-content-center">
  @error('saved')
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Anotação salva!</strong>{{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @enderror
  @error('updated')
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Anotação editada!</strong>{{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @enderror
  @error('destroyed')
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @enderror
</div>
@endsection

@section('content')
@if($notes->isEmpty())
  <div class="alerts-container row justify-content-center">
    <div class="alert alert-secondary d-flex align-items-center" role="alert">
      Que tal começar a criar suas anotações?
      <a href="{{ route('notes.create') }}" class="btn mt-1">Criar Nota</a>
    </div>
  </div>
@else
<div class="alerts-container row justify-content-center">
  <div class="alert alert-secondary alert-search d-flex align-items-center justify-content-center" role="alert">
    <div class="input-group d-flex align-items-center justify-content-center">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="bx bx-search-alt"></i></span>
      </div>
      <input type="text" class="form-control search-note" id="search-note" placeholder="Buscar...">
      <div class="input-group-append">
        <a href="{{ route('notes.create') }}" class="btn px-4">Criar Nota</a>
      </div>
    </div>
  </div>
</div>

<div id="notes-container" class="notes-container row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-start" id="notesContainer">
  @foreach($notes as $note)
  <div class="col">
    <div class="note-card">
      <h2 class="note-title">{{ $note->title }}</h2>
      <p class="note-date">{{ TextHelper::formatNoteDate($note->updated_at) }}</p>
      <p class="note-content">{{ TextHelper::formatNoteContent($note->content) }}</p>
      <a href="notes/{{ $note->id }}" class="note-overlay"></a>
    </div>
  </div>
  @endforeach
</div>

@section('searchNotes')
  {{-- Script CKEditor --}}
  <script src="/js/search-notes.js"></script>
@endsection
@endif

@endsection
