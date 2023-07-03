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
        $note->content = $request->content;
        $note->user_id = $user->id;
        $note->save();

        return redirect('/');
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
        Note::findOrFail($request->id)->update($request->all());
        return redirect('/');

    }


}