<?php

use App\Http\Controllers\FlatController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FlatController::class, 'index']);
Route::get('flats', [FlatController::class, 'allFlats']);
Route::get('detail/{id}', [FlatController::class, 'detailPage']);


