<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/layout');
});

Route::get('/flats', function () {
    return view('pages/flats');
});
