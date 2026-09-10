<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return response()->json(['message' => 'API working!']);
});

Route::post('/login', [AuthController::class, 'loginApi']);

// Products
Route::get('/products', [ProductController::class, 'apiIndex']);
Route::get('/products/{id}', [ProductController::class, 'apiShow']);

// Categories
Route::get('/categories', [CategoryController::class, 'apiIndex']);
Route::get('/categories/{id}', [CategoryController::class, 'apiShow']);

// ✅ Transactions
Route::get('/transactions', [TransactionController::class, 'apiIndex']);
Route::post('/transactions', [TransactionController::class, 'apiStore']);
Route::get('/transactions/{id}', [TransactionController::class, 'apiShow']);