<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//  return view('layout');
//});
Route::get('/', [ProductController::class, 'index']);
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add_to_cart');
