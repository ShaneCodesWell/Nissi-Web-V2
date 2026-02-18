<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/solutions', [DashboardController::class, 'solutions'])->name('solutions');
Route::get('/programs', [DashboardController::class, 'programs'])->name('programs');
Route::get('/shop', [DashboardController::class, 'shop'])->name('shop');
Route::get('/vision', [DashboardController::class, 'vision'])->name('vision');
Route::get('/blogs', [DashboardController::class, 'blogs'])->name('blogs');
