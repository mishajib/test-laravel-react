<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Specific routes MUST come before parameterized routes
Route::post('/product', [ProductController::class, 'addProduct']);
Route::get('/products', [ProductController::class, 'getProducts']);
Route::get('/products/search', [ProductController::class, 'searchProducts']);
Route::get('/products/filterBy', [ProductController::class, 'filterProducts']);
Route::get('/products/{list}', [ProductController::class, 'listOfProducts']);

Route::get('/product/{id}', [ProductController::class, 'getProduct']);
Route::get('/category/{category}', [ProductController::class, 'getByCategory']);
Route::get('/filter/topRated', [ProductController::class, 'getTopRated']);
Route::get('/filter/bestSellers', [ProductController::class, 'getBestSellers']);
