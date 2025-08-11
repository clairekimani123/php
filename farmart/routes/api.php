<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'apiIndex'])->name('api.products.index');
Route::post('/products', [ProductController::class, 'apiStore'])->name('api.products.store');
Route::get('/products/{product}', [ProductController::class, 'apiShow'])->name('api.products.show');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/cart', [CartController::class, 'apiIndex'])->name('api.cart.index');
    Route::post('/cart/{product}', [CartController::class, 'apiAdd'])->name('api.cart.add');
    Route::delete('/cart/{cart}', [CartController::class, 'apiRemove'])->name('api.cart.remove');
});