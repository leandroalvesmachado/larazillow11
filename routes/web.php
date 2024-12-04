<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return view('welcome');
//     return inertia('Index/Index');
// });

Route::get('/',[IndexController::class, 'index'])->name('home');
Route::get('/hello',[IndexController::class, 'show']);

Route::resource('listings', ListingController::class)
    ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

Route::get('login', [AuthController::class, 'create'])->name('login');
Route::post('login', [AuthController::class, 'store'])->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])->name('logout');
