<?php

namespace App\Http\Controllers;

use App\Models\Flat;

class FlatController extends Controller
{
        public function index() {

            return view('pages.layout', [
                'flats' => Flat::latest()->simplePaginate(6)->withQueryString()
            ]);
        }

    public function allFlats() {

        return view('pages.flat', [
            'flats' => Flat::all()
        ]);
    }

    public function detailPage($id) {

        return view('components/flat/detail', [
            'flat' => Flat::find($id)
        ]);
    }

    public function delete($id) {

        Flat::find($id)->delete();

        return redirect('/')->with('success', 'The item was successfully deleted.');
    }

    public function create()
    {
        //dd("page created");

        return view('components.flat.create');
    }

    public function store()
    {
        dd(request()->all());
    }
}
