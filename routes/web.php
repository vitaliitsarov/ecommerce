<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');

// Products
Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.show');

// Categories
Route::get('/category/{id}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');

// Checkout
Route::get('/checkout', [\App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
