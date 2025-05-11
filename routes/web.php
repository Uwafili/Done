<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::view('/personal_insurance', 'personal.personal_insurance')->name('personal_insurance');
    Route::view('/dashboard', 'user.dashboard')->name('dashboard'); 
});
Route::view('/', 'posts.index')->name('index');

Route::middleware('guest')->group(function () {
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::view('/register', 'auth.register')->name('register');

    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::view('/login', 'auth.login')->name('login');

});
