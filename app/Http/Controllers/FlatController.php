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

    public function allFlats() {

        return view('pages.flat', [
            'flats' => Flat::all()
        ]);
    }

    public function detailPage($id) {

        return view('components/flat/detail', [
            'id' => $id,
            'flat' => Flat::find($id)
        ]);
    }
}
