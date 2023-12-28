<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::prefix('v1')->group(function () {

    // Guest Route
    Route::middleware('guest')->group(function () {
        Route::post('login', [AuthController::class, 'login']);
        Route::post('register', [RegisteredUserController::class, 'store']);
    });

    // Api Route with token
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });

    // Api Route with sanctum
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::get('profile', [AuthController::class, 'profile']);
    });
});
