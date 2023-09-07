<?php

use App\Http\Controllers\api\LaundryController;
use App\Http\Controllers\api\PromoController;
use App\Http\Controllers\api\ShopController;
use App\Http\Controllers\api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/promo', [PromoController::class, 'readAll'])->name('readAll.promo');
Route::get('/shop', [ShopController::class, 'readAll'])->name('readAll.shop');
Route::get('/laundry', [LaundryController::class, 'readAll'])->name('readAll.laundry');
Route::get('/user', [UserController::class, 'readAll'])->name('readAll.user');