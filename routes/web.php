<?php

use App\Http\Controllers\Frontcontroller;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Frontcontroller::class, 'homepage'])->name('items.homepage');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [Frontcontroller::class, 'dashboard'])->name('items.dashboard');
    Route::resource('post', PostController::class);  
});