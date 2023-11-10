<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function create() {
        return view('components.login.index');
    }

    public function store() {

        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!auth()->attempt($credentials)) {
            return back()->withErrors([
                'email' => 'Your provided credentials could not be verified.',
            ]);
        }

        session()->regenerate();

        return redirect("/")->with("success", "Welcome Back!");
    }
}
