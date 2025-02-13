<?php

use App\Http\Controllers\ApiProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::apiResource('products',ApiProductModel::class);

//Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::apiResource('products', ApiProductModel::class);
//});

Route::post("login",[UserController::class,'index']);