<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'products']);
Route::get('/products/register', [ProductController::class, 'register']);
Route::post('/register', [ProductController::class, 'products2']);