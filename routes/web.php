<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\DashboardController;
Route::view('/', 'posts.index')->name('index');
Route::middleware('auth')->group(function () {

});


Route::middleware('guest')->group(function () {
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::view('/register', 'auth.register')->name('register');

    

});
