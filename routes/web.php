<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/solutions', [DashboardController::class, 'solutions'])->name('solutions');
Route::get('/products', [DashboardController::class, 'products'])->name('products');
Route::get('/shop', [DashboardController::class, 'shop'])->name('shop');
Route::get('/about', [DashboardController::class, 'about'])->name('about');
Route::get('/blogs', [DashboardController::class, 'blogs'])->name('blogs');
