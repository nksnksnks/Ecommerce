<?php

use App\Http\Controllers\Api\APP\NotificationController;
use Illuminate\Support\Facades\Route;

// api Notification
Route::group(['prefix' => 'notification'], function () {
    Route::get('index', [NotificationController::class, 'index']);
    Route::post('change-status', [NotificationController::class, 'changeStatus']);
});
