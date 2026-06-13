<?php

use App\Http\Controllers\WhimController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');
Route::view('/home', 'index');

Route::get('/whims', [WhimController::class, 'index'])->name('whims.index');