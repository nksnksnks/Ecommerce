<?php

use App\Http\Controllers\Api\APP\PaymentController;
use Illuminate\Support\Facades\Route;

// api Payment
Route::apiResource('/Payment', PaymentController::class);
