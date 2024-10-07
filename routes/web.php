<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\PostController;
use App\Models\Post;

/* Route::get('/', function () {
    return view('welcome');
}); */


/* Route::get('/', function () {
    return "Welcome";
}); */

Route::get('/',[Home::class, 'index'] );

Route::post('/posts',[PostController::class,'store']);

Route::get('/perfilCuenta',[Home::class, 'index'] );

Route::get('/post', function () {
    return "HOLA";
});

Route::get('prueba', function(){
    /* return 'Hola desde la ruta de prueba'; */
    $post = new Post;

    $post ->ci_persona = '987868';
    $post ->nombre = 'Laura';
    $post ->apellido_paterno = 'Maldonado';
    $post ->apellido_materno = 'Castillo';
    $post ->fecha_nacimiento ='2010-11-02';
    $post ->correo_electronico ='laura@gmail.com';
    $post ->save();

    return $post;
});

use App\Http\Controllers\RegistroController;

Route::post('/registro', [RegistroController::class, 'store'])->name('registro.store');
