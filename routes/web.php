<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('food-beverage', [ProductsController::class, 'makanan']);
    Route::get('beauty-health', [ProductsController::class, 'kecantikan']);
    Route::get('home-care', [ProductsController::class, 'PerlengkapanRumah']);
    Route::get('baby-kid', [ProductsController::class, 'bayi']);
});

Route::get('/user/id/{id}/name/{name}', [UserController::class, 'profile']);
Route::get('/',[TransaksiController::class,'transaksi']);
