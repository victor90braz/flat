<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function index() {
        return view('components.login.index');
    }
}
