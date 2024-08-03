<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomersController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group( function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        
        Route::middleware('can:manage Carts')->group(function (){
            Route::resource('carts', CartsController::class);
        });
    
        Route::middleware('can:manage Customers')->group(function (){
            Route::resource('customers', CustomersController::class);
        });
    
        Route::middleware('can:manage Customers')->group(function (){
            Route::resource('orders', OrdersController::class);
        });
    });
});

require __DIR__.'/auth.php';

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('About', [MainController::class, 'about'])->name('about');
Route::get('/product', [MainController::class, 'product'])->name('product');