<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NteController;

// Home
Route::get('/', [HomeController::class, 'index']);
// Nte
Route::get('/nte', [NteController::class, 'index']);
