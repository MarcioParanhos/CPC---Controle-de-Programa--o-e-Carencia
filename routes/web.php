<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home/home'); });
// NTE
Route::get('/nte', function () { return view('nte/nte'); });
