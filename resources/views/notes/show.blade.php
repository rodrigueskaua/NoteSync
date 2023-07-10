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

    <div class="fixed-bottom">
      <div class="fixed-bottom-container">
        <button id="btn-delete" type="button" class="btn btn-lg btn-delete">Apagar</button>
        <button id="toggleModeButton" type="button" class="btn btn-lg btn-edit">Editar</button>
      </div>
    </div>
</form>
@section('ckeditor')
  {{-- Script Dependency CKEditor --}}
  <script src="/js/vendor/ckeditor/build/ckeditor.js"></script>
  {{-- Script CKEditor --}}
  <script src="/js/CKEditor.js"></script>
@endsection

@section('sweetAlert')
  {{-- Script Dependency SweetAlert --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
<script>$("#btn-delete").click(function(){Swal.fire({title:"Confirmar remo\xe7\xe3o",text:"Tem certeza? Essa a\xe7\xe3o n\xe3o poder\xe1 ser desfeita",icon:"warning",showCancelButton:!0,confirmButtonText:"Apagar",cancelButtonText:"Cancelar",customClass:{confirmButton:"btn btn-danger",cancelButton:"btn btn-secondary",popup:"modal-delete",content:"modal-delete-content"},confirmButtonClass:"btn-modal-confirm",cancelButtonClass:"btn-modal-cancel"}).then(e=>{if(e.isConfirmed){var t=document.createElement("form");t.method="POST",t.action="/notes/destroy/{{ $note->id }}",t.style.display="none";var n=document.createElement("input");n.type="hidden",n.name="_token",n.value="{{ csrf_token() }}",t.appendChild(n);var o=document.createElement("input");o.type="hidden",o.name="_method",o.value="DELETE",t.appendChild(o),document.body.appendChild(t),t.submit()}})});</script>

@endsection
