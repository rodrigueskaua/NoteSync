<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleAuthController;

Route::middleware(['checkauth'])->group(function () {
    Route::get('/', [NoteController::class, 'index'])->name('notes.index');
    Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');
    Route::post('/notes/store', [NoteController::class, 'store'])->name('notes.store');
    Route::get('/notes/{id}', [NoteController::class, 'show'])->name('notes.show');
    Route::put('/notes/update/{id}', [NoteController::class, 'update'])->name('notes.update');
    Route::delete('/notes/destroy/{id}', [NoteController::class, 'destroy'])->name('notes.destroy');
    Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');

});

Route::middleware(['checkguest'])->group(function () {
    Route::post('/auth', [LoginController::class, 'auth'])->name('auth');
    Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
    Route::get('/register', [LoginController::class, 'create'])->name('auth.register');
    Route::post('/user/create', [UserController::class, 'store'])->name('user.store');
    Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('auth.google');
    Route::get('/auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

});
