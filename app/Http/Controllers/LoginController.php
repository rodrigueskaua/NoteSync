<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function create()
    {
        return view('auth.register');
    }
    public function auth(Request $request)
    {

        $validatedData = $request->validate([
            'email' => ['required', 'email', Rule::exists('users', 'email')],
            'password' => ['required', 'min:8'],
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('notes.index'));
        } else {
            return redirect()->back()->withErrors([
                'email' => 'Dados incorretos. Verifique as informações fornecidas.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('auth.login'));

    }
}