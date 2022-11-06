<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controle_ntesController;

// Home
Route::get('/', [HomeController::class, 'index']);
// Nte
Route::get('/nte/{nte}', [Controle_ntesController::class, 'index']);
Route::get('/show/uee/{id}', [Controle_ntesController::class, 'show']);

