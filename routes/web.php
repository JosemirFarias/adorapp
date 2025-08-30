<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RegisterController::class, 'index'])->name('home.index');
Route::get('/create', [RegisterController::class, 'create'])->name('user.create');
