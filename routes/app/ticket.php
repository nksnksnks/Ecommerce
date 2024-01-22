<?php

use App\Http\Controllers\Api\WEB\TicketController;
use Illuminate\Support\Facades\Route;

// api Ticket
Route::apiResource('/Ticket', TicketController::class);
