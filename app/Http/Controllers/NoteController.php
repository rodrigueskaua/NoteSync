<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        return view('notes.notes');
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

        return redirect('welcome');
    }
}