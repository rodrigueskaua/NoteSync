<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.recent-notes', function ($view) {
            $recentNotes = Note::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->take(5)->get();
            $view->with('recentNotes', $recentNotes);
        });
    }
}
