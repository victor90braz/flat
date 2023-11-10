<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception; // Import the Exception class

class RegisterController extends Controller
{
    public function create() {
        return view("components.register.create");
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:7', 'max:255']
        ]);

        (new User())->create($attributes);

        return redirect('/');
    }
}
