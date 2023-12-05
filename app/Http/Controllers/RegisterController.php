<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create() {
        return view("pages.register.create");
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:191'],
            'email' => ['required', 'email', 'max:191'],
            'password' => ['required', Password::defaults()]
        ]);

        (new User())->create($attributes);

        return redirect('/login')->with('success', 'Registration successful!');
    }
}
