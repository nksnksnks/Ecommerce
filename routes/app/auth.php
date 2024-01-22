<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\App\AuthController;

// auth app
Route::post('auth/register', [AuthController::class, 'register']);
Route::post('auth/login', [AuthController::class, 'login']);
Route::middleware('auth:api')->group(function () {
    Route::post('auth/update', [AuthController::class, 'update']);
    Route::get('auth/select/{id}', [AuthController::class, 'select']);
    Route::post('auth/change-password', [AuthController::class, 'changePassword']);
    Route::post('auth/update-avatar', [AuthController::class, 'updateAvatar']);
});

