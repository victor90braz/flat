<?php

namespace App\Http\Controllers;

use App\Models\Flat;

class FlatController extends Controller
{
    public function index() {

        return view('pages.layout', [
            'flats' => Flat::all()
        ]);
    }
}
