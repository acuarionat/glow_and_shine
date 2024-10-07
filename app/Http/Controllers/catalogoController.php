<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class catalogoController extends Controller
{
    public function mostrarCatalogoMaquillaje() {
        $productosMaquillaje = DB::table('producto')
            ->join('imagen_producto', 'producto.id_imagen_producto', '=', 'imagen_producto.id_imagen_producto')
            ->where('producto.categoria', 'Maquillaje')
            ->select('producto.*', 'imagen_producto.direccion_imagen')
            ->get();
        
        return view('catalogo', ['productos' => $productosMaquillaje]);
    }

    public function mostrarDetalleProducto($id) {
        $producto = DB::table('producto')
            ->join('imagen_producto', 'producto.id_imagen_producto', '=', 'imagen_producto.id_imagen_producto')
            ->where('producto.id_producto', $id)
            ->select('producto.*', 'imagen_producto.direccion_imagen')
            ->first();

        return view('producto', ['producto' => $producto]);
    }
    
    
}

