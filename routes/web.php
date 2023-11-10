<?php

use App\Http\Controllers\FlatController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FlatController::class, 'index']);

Route::get('flats', function () {
    return view('pages/flats');
});

Route::get('/flats/details', function () {
    return view('pages/flat-detail');
});
