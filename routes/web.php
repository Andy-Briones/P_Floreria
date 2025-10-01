<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\Product_CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', ProductController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('clients', ClientController::class);
Route::resource('sells', SellController::class);
Route::resource('buys', BuyController::class);
Route::resource('product_categories', Product_CategoryController::class);
Route::resource('users', UserController::class);
Route::resource('orders', OrderController::class);