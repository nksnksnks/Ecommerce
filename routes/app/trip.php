<?php

use App\Http\Controllers\Api\WEB\TripController;
use Illuminate\Support\Facades\Route;

// api Trip
Route::apiResource('/Trip', TripController::class);
