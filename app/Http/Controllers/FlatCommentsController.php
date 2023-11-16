<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FlatCommentsController extends Controller
{
    public function store(Request $request, Flat $flat)
    {
        request()->validate([
            'body' => ['required']
        ]);

        $flat->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body')
        ]);

        return back();
    }
}
