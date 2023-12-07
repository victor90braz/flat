<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit() {
        return view('pages.user.edit');
    }

    public function store(Request $request) {

        dd($request->all());
        //return view('pages.user.store');
    }
}
