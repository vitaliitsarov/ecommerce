<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', [\App\Http\Controllers\Api\ProductController::class, 'index']);
Route::get('/product/{id}', [\App\Http\Controllers\Api\ProductController::class, 'show']);

