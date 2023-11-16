<?php

use App\Http\Controllers\FlatCommentsController;
use App\Http\Controllers\FlatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FlatController::class, 'index']);
Route::get('flats', [FlatController::class, 'allFlats']);
Route::get('detail/{id}', [FlatController::class, 'detailPage']);
Route::delete('delete/{id}', [FlatController::class, 'delete']);
Route::get('flat/create', [FlatController::class, 'create']);
Route::post('flat/store', [FlatController::class, 'store']);
Route::get('flat/edit/{id}', [FlatController::class, 'edit'])->name('flat.edit');
Route::patch('/flat/update/{id}', [FlatController::class, 'update']);

Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);

Route::get('login', [LoginController::class, 'create']);
Route::post('login', [LoginController::class, 'store']);

Route::get('logout', [LogoutController::class, 'destroy']);

Route::post('/flat/{flat:id}/comments/', [FlatCommentsController::class, 'store']);

