<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Support\Facades\Gate;
use App\Helpers\TextHelper;
use Illuminate\Support\Str;

class NoteController extends Controller
{
    public function index(Request $request)
    {
        if ($request->get('search')) {
            $search = $request->get('search');
            $notesQuery = auth()->user()->notes();

            if ($search != "vazio") {
                $notesQuery->where(function ($query) use ($search) {
                    $query->where('title', 'like', "%$search%")->orWhere('content', 'like', "%$search%");
                });
            } else {
                $notesQuery->orderBy('updated_at', 'desc');
            }
            $notes = $notesQuery->get();
            $formatedNotes = [];
            foreach ($notes as $note) {
                $formatedNotes[] = [
                    'id' => $note->id,
                    'title' => $note->title,
                    'date' => TextHelper::formatNoteDate($note->updated_at),
                    'content' => TextHelper::formatNoteContent($note->content),
                ];
            }
            return response()->json($formatedNotes);
        } else {
            $notes = auth()->user()->notes()->orderBy('updated_at', 'desc')->get();
            return view('notes.index', ['notes' => $notes]);
        }
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $note = new Note;
        $note->id = (string) Str::uuid();
        $note->title = $request->title;
        $note->content = $request->content ?? 'Sem texto';
        $note->user_id = $user->id;
        $note->save();
        return redirect()->route('notes.index')->withErrors([
            'saved' => ' Agora você pode conferir e editar a nota logo abaixo.',
        ]);
        ;
    }

    public function show($id)
    {
        $note = Note::findOrFail($id);

        if (Gate::allows('show-note', $note)) {
            return view('notes.show', ['note' => $note]);
        } else {
            return redirect()->route('notes.index');
        }

    }
    public function update(Request $request)
    {
        $note = Note::findOrFail($request->id);
        $note->title = $request->title;
        $note->content = $request->content ?? 'Sem texto';
        $note->update();
        return redirect()->route('notes.index')->withErrors([
            'updated' => ' Confira a versão atualizada abaixo.',
        ]);
    }

    public function destroy($id)
    {
        Note::findOrFail($id)->delete();
        return redirect()->route('notes.index')->withErrors([
            'destroyed' => 'Anotação removida!',
        ]);
    }


}