<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\catalogoController;

Route::get('/', [catalogoController::class, 'mostrarCatalogoMaquillaje']);

Route::get('/producto/{id}', [catalogoController::class, 'mostrarProducto'])->name('producto.detalle');


// Route::get('/', function () {
//     return view('producto');
// });

// Route::get('/', function () {
//     return view('catalogo');
// });


