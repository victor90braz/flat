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

        if (auth()->user()) {
            // User is authenticated, redirect to the appropriate route
            return redirect('/')->with("success", "Welcome Back!");
        }

        return redirect("/")->with("success", "Welcome Back!");
    }


}
