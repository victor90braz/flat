<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function create() {
        return view('pages.login.index');
    }

    public function store() {
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!auth()->attempt($credentials)) {
            return back()->withErrors([
                'email' => 'Invalid login credentials. Please try again.',
            ]);
        }

        return redirect("/")->with("success", "Welcome Back!");
    }
}
