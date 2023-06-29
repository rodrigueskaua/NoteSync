@php
  use App\Helpers\TextHelper;
@endphp

@extends('layouts.main')
@section('title', 'Suas Anotações')
@section('current-page-name', 'Suas Anotações')
@section('content')
<div class="notes-container row row-cols-1 row-cols-md-2 justify-content-center">
  @foreach($notes as $note)

  <div class="col">
    <div class="note-card">
      <h2 class="note-title">{{ $note->title }}</h2>
      <p class="note-date">{{ date('d/m/Y', strtotime($note->updated_at)) }}</p>
      <p class="note-content">{{ TextHelper::formatNoteContent($note->content) }}</p>
      <a href="nota-completa.html" class="note-button">Leia mais</a>
    </div>
  </div>
  @endforeach
</div>

@endsection