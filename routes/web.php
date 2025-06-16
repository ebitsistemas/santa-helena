<?php

use Illuminate\Support\Facades\Route;


Route::get('', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('galeria', [\App\Http\Controllers\HomeController::class, 'galeria']);
