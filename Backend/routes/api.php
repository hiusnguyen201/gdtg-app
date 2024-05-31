<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// api/v1
Route::prefix("v1")->middleware('api')->group(function () {
    Route::post("/login", [LoginController::class, 'localLogin']);
    Route::post("/verify-otp", [LoginController::class, 'verifyOtp']);
    Route::post("/resend-otp", [LoginController::class, 'resendOtp']);

    Route::prefix("users")->group(function () {
        Route::get("/{id}", [UserController::class, 'show']);
    });
});
