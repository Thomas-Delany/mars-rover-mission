<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoverController;

Route::get('/', [RoverController::class, 'index']);
Route::post('/move', [RoverController::class, 'move']);
