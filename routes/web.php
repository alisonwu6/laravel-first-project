<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Laravel 8 (New)
// comment out `use App\Http\Controllers\ProductsController;`
Route::get('/products',[ProductsController::class, 'index']);   
Route::get('products/about', [ProductsController::class, 'about']);

// endpoint pattern Integer
// Route::get('products/{id}',[ProductsController::class, 'show'])->where('id', '[0-9]+');

// endpoint pattern String
// Route::get('products/{name}',[ProductsController::class, 'show'])->where(['name', '[a-zA-Z]+']);

// endpoint pattern products/{name}/{id}
Route::get('products/{name}/{id}',[ProductsController::class, 'show'])->where(['name', '[a-z]+', 'id', '[0-9]+']);

// Laravel 8 (Also New)
// Route::get('/products', 'App\Http\Controllers\ProductsController@index');