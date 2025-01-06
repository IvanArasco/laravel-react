<?php

use App\Http\Controllers\CarController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', [CarController::class, 'getCars']);

