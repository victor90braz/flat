<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit(User $user) {
        return view('pages.user.edit', compact('user', ));
    }

    public function store(Request $request) {

        dd($request->all());
        //return view('pages.user.store');
    }
}
