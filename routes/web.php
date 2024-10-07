<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactanosController;
use App\Http\Controllers\inicioSesionController;

Route::get('/', contactanosController::class);
Route::get('/inicio_sesion', inicioSesionController::class);