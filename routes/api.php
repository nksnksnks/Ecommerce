<?php

use App\Http\Controllers\Api\APP\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'app'], function () {

    \App\Helpers\RouteHelper::includeRouteFiles(__DIR__ . '/app');
});

// // API ADMIN CMS
// Route::group(['prefix' => 'cms', 'middleware' => ['language', 'role:admin', 'auth:sanctum']], function () {

//     \App\Helpers\RouteHelper::includeRouteFiles(__DIR__ . '/cms');
// });

// // API WEBSITE
// Route::group(['prefix' => 'web', 'middleware' => ['language']], function () {
//     \App\Helpers\RouteHelper::includeRouteFiles(__DIR__ . '/web');
// });


