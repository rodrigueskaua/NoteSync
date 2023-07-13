<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Support\Facades\Gate;

class NoteController extends Controller
{
    public function index()
    {
        $notes = auth()->user()->notes()->orderBy('updated_at', 'desc')->get();
        return view('notes.index', compact('notes'));
    }
    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $note = new Note;
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