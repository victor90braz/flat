<?php

namespace App\Http\Controllers;

class LogoutController extends Controller
{
    public function destroy() {

        auth()->logout();

        return redirect('/')->with('success', 'You have been successfully logged out. See you next time!');
    }
}
