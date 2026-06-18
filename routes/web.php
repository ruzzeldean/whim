<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WhimController;
use Illuminate\Support\Facades\Route;

// Public
Route::redirect('/', '/home');
Route::view('/home', 'index');

Route::get('/whims', [WhimController::class, 'index'])->name('whims.index');

// Admin
Route::get('/auth/login', [AuthController::class, 'show'])->name('login')->middleware('guest');
Route::post('/auth/login', [AuthController::class, 'login'])->middleware('guest');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::redirect('/', '/admin/dashboard');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/whims', [AdminController::class, 'whims'])->name('admin.whims');

    Route::post('/whims', [WhimController::class, 'store'])->name('whim.store');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
