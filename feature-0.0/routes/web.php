<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/register', [AuthController::class,'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class,'register']);
