<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/layout');
});

Route::get('flats', function () {
    return view('pages/flats');
});

Route::get('/flats/details', function () {
    return view('pages/flat-detail');
});
