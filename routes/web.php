<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\catalogoController;

Route::get('/', [catalogoController::class, 'mostrarCatalogoMaquillaje']);

// routes/web.php
Route::get('/producto/{id}', [catalogoController::class, 'mostrarDetalleProducto']);

// Route::get('/', function () {
//     return view('producto');
// });

// Route::get('/', function () {
//     return view('catalogo');
// });


