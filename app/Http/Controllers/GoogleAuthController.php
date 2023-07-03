<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {

        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id', $google_user->getId())->first();

            if (!$user) {
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'google_id' => $google_user->getId(),
                    'email' => $google_user->getEmail()
                ]);
                Auth::login($new_user);

                return redirect(route('notes.index'));
            } else {
                Auth::login($user);
                return redirect(route('notes.index'));
            }
        } catch (\Throwable $th) {
            dd('Erro:', $th->getMessage());
        }
    }
}