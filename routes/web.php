<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('About', [MainController::class, 'about'])->name('about');
Route::get('/product', [MainController::class, 'product'])->name('product');

Route::get('/auth/create-account', [AuthController::class, 'create'])->name('create.account');
