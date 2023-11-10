<?php

use App\Http\Controllers\FlatController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FlatController::class, 'index']);

Route::get('flats', function () {
    return view('pages/flats');
});

Route::get('detail/{id}', function ($id) {
    return view('components/flats/detail', [
        'id' => $id
    ]);
});


