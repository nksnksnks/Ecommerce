<?php

use App\Http\Controllers\Api\APP\InfoController;
use Illuminate\Support\Facades\Route;

// api Info
Route::group(['prefix' => 'info'], function () {
    Route::get('term-of-service', [InfoController::class, 'termOfService'])->withoutMiddleware(['role:user', 'auth:sanctum']);
    Route::get('contact', [InfoController::class, 'contact'])->withoutMiddleware(['role:user', 'auth:sanctum']);
});
