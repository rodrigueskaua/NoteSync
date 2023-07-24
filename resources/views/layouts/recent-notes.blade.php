@php
  use App\Helpers\TextHelper;
@endphp


<ul class="list-group list-group-flush">
    @if ($recentNotes->isEmpty())
      <li class="list-group-item no-notes">Nenhuma nota salva</li>
      <a href="{{ route('notes.create') }}" class="btn btn-sm w-100 mt-1">Criar Nota</a>
    @else
      @foreach ($recentNotes as $note)
        <li class="list-group-item">
          <a href="{{ route('notes.show', $note->id) }}">{{ TextHelper::formatSidebarNoteTitle($note->title) }}</a>
        </li>
      @endforeach
      <a href="{{ route('notes.index') }}" class="btn btn-sm w-100 mt-1">Ver Todos</a>
    @endif
  </ul>
