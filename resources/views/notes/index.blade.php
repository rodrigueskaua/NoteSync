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
<div class="notes-container row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-start">
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
@endsection
