<?php

use App\Http\Controllers\FlatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FlatController::class, 'index']);
Route::get('flats', [FlatController::class, 'allFlats']);
Route::get('detail/{id}', [FlatController::class, 'detailPage']);


Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);

Route::get('login', [LoginController::class, 'index']);
