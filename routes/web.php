<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Main Routes
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/product', [MainController::class, 'product'])->name('product');

// Authentication Routes
Route::get('/customer/register', [CustomerController::class, 'registerPage'])->name('customer.register.page');
Route::post('/customer/register', [CustomerController::class, 'register'])->name('customer.register');
Route::get('/customer/login/puki', [CustomerController::class, 'loginPage'])->name('customer.login.page');
Route::get('/customer/login', [CustomerController::class, 'login'])->name('customer.login');
Route::post('/customer/logout', [CustomerController::class, 'logout'])->name('customer.logout');

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::middleware('can:manage customers')->group(function () {
            Route::resource('customers', CustomerController::class);
        });

        Route::middleware('can:manage carts')->group(function () {
            Route::resource('carts', CartController::class);
        });

        Route::middleware('can:manage cart items')->group(function () {
            Route::resource('cart-items', CartItemController::class);
        });

        Route::middleware('can:manage orders')->group(function () {
            Route::resource('orders', OrderController::class);
        });

        Route::middleware('can:manage order items')->group(function () {
            Route::resource('order-items', OrderItemController::class);
        });

        Route::middleware('can:manage products')->group(function () {
            Route::resource('products', ProductController::class);
        });
    });
});

require __DIR__.'/auth.php';
