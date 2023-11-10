<?php

namespace App\Http\Controllers;

class LogoutController extends Controller
{
    public function destroy() {

        auth()->logout();

        return redirect('/');
    }
}
