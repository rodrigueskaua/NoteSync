<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', [NoteController::class, 'index'])->name('notes.index');

Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');

Route::post('/notes/store', [NoteController::class, 'store'])->name('notes.store');