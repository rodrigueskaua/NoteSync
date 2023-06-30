<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {

        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }
    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $note = new Note;
        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();

        return redirect('/');
    }

    public function show($id)
    {
        $note = Note::findOrFail($id);
        return view('notes.show', ['note' => $note]);
    }
    public function update(Request $request)
    {
        Note::findOrFail($request->id)->update($request->all());
        return redirect('/');

    }


}