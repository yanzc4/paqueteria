<?php

use App\Http\Controllers\HolaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', [HolaController::class, 'index']);
