<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
<<<<<<< HEAD

Route::get('About', [MainController::class, 'about'])->name('about');
=======
Route::get('/product', [MainController::class, 'product'])->name('product');
>>>>>>> 16d00768a0048c6a89c13428a7b9e31804160874
