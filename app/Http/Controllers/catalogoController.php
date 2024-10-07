<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Importar la clase DB

class catalogoController extends Controller
{
    // Controlador para obtener los productos de maquillaje junto con la imagen
    public function mostrarCatalogoMaquillaje() {
        $productosMaquillaje = DB::table('producto')
            ->join('imagen_producto', 'producto.id_imagen_producto', '=', 'imagen_producto.id_imagen_producto')
            ->where('producto.categoria', 'Maquillaje')
            ->select('producto.*', 'imagen_producto.direccion_imagen') // Seleccionar los campos del producto y la imagen
            ->get(); // Obtiene todos los productos que tengan categoría "Maquillaje"
        
        return view('catalogo', ['productos' => $productosMaquillaje]);
    }


}
