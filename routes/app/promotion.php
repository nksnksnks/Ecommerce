<?php

use App\Http\Controllers\Api\WEB\PromotionController;
use Illuminate\Support\Facades\Route;

// api Promotion
Route::apiResource('/Promotion', PromotionController::class);
