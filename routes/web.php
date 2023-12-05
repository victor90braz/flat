<?php

use App\Http\Controllers\FlatCommentController;
use App\Http\Controllers\FlatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [FlatController::class, 'index']);
Route::get('flats/create', [FlatController::class, 'create'])->name('flats.create');
Route::post('flats/store', [FlatController::class, 'store'])->name('flats.store');
Route::get('flats/user', [FlatController::class, 'userFlats'])->name('flats.user');
Route::get('flats/{flat}', [FlatController::class, 'view'])->name('flats.view');
Route::delete('flats/{flat}', [FlatController::class, 'delete'])->name('flats.delete');
Route::get('flats/edit/{flat}', [FlatController::class, 'edit'])->name('flats.edit');
Route::patch('/flats/update/{flat}', [FlatController::class, 'update'])->name('flats.update');

Route::post('/flats/{flat}/comments', [FlatCommentController::class, 'store'])->name('flats.comments.store');
Route::delete('/flats/{flat}/comments/{comment}', [FlatCommentController::class, 'delete'])->name('flats.comments.delete');

Route::get('register', [RegisterController::class, 'create'])->name('register.create');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::get('login', [LoginController::class, 'create'])->name('login.create');
Route::post('login', [LoginController::class, 'store'])->name('login.store');

Route::get('logout', [LogoutController::class, 'destroy'])->name('logout');

Route::get('users', [User::class, 'users'])->name('users');

