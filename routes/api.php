<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Laravel\Sanctum\Sanctum;
use App\Http\Controllers\UserAuthController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/productsAPI', [ProductController::class, 'show']);
    Route::post('logout',[UserAuthController::class,'logout']);
    Route::patch('/products/{id}/update_quantity', [ProductController::class, 'updateQuantity']);
    Route::post('/products/{id}/sell', [ProductController::class, 'sellProduct']);
});

Route::post('register',[UserAuthController::class,'register']);
Route::post('login',[UserAuthController::class,'login']);
