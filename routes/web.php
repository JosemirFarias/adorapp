<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

// Login
Route::get('/', [LoginController::class, 'index'])->name('login.form');
Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

// Cadastro
Route::get('/create', [RegisterController::class, 'create'])->name('user.create');
Route::post('/create', [RegisterController::class, 'store'])->name('user.store');
