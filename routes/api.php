<?php

use App\Http\Controllers\JWTAuthController;
use App\Http\Middleware\JwtMiddleware;
use Illuminate\Routing\Route;

Route::withoutMiddleware('jwtAuth')->group(function () {
    Route::post('/register', [JWTAuthController::class, 'register']);
    Route::post('/login', [JWTAuthController::class, 'login']);
});
Route::get('/get-user', [JWTAuthController::class, 'getUser']);
Route::get('/logout', [JWTAuthController::class, 'logout']);
