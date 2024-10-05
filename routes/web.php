<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;

/* Route::get('/', function () {
    return view('welcome');
}); */


/* Route::get('/', function () {
    return "Welcome";
}); */

Route::get('/',[Home::class, 'index'] );

Route::get('/perfilCuenta',[Home::class, 'index'] );

Route::get('/post', function () {
    return "HOLA";
});