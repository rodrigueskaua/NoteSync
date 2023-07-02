<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\LoginController;

Route::get('/', [NoteController::class, 'index'])->name('notes.index');

Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');
Route::post('/notes/store', [NoteController::class, 'store'])->name('notes.store');

Route::get('/notes/{id}', [NoteController::class, 'show'])->name('notes.show');
Route::put('/notes/update/{id}', [NoteController::class, 'update'])->name('notes.update');

Route::get('/login', [LoginController::class, 'index'])->name('auth.login');

Route::post('/auth', [LoginController::class, 'auth'])->name('auth');

Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');