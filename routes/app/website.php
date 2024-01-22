<?php

use App\Http\Controllers\Api\WEB\WebsiteController;
use Illuminate\Support\Facades\Route;

// api Website
Route::apiResource('/Website', WebsiteController::class);
