<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\BossController;
use App\Http\Controllers\Product_CategoryController;
use App\Http\Controllers\Floral_ArrangementController;
use App\Http\Controllers\Plant_CategoryController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', ProductController::class);
Route::resource('administrators', AdministratorController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('clients', ClientController::class);
Route::resource('sells', SellController::class);
Route::resource('buys', BuyController::class);
Route::resource('bosses', BossController::class);
Route::resource('floral_arrangements', Floral_ArrangementController::class);
Route::resource('product_categories', Product_CategoryController::class);
Route::resource('plant_categories', Plant_CategoryController::class);