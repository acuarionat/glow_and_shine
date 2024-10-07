<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    
    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'nombre' => 'required|string|max:100',
            'apellido_paterno' => 'required|string|max:100',
            'apellido_materno' => 'nullable|string|max:100',
            'correo' => 'required|email|max:100',
            'ci' => 'required|string|max:20',
            'contraseña' => 'required|string|min:8',
        ]);

        // Crear un nuevo registro de Persona
        $persona = Persona::create([
            'ci_persona' => $request->ci,
            'nombres' => $request->nombre,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'correo_electronico' => $request->correo,
            'fecha_registro' => now(),
        ]);

        // Crear el registro de Usuario
        Usuario::create([
            'id_persona' => $persona->id_persona, // Relación con la tabla Persona
            'contraseña' => Hash::make($request->contraseña), // Encriptación de la contraseña
            'fecha_registro' => now(),
        ]);

        // Redirigir o retornar un mensaje de éxito
        return redirect()->back()->with('success', 'Registro completado correctamente.');
    }

}
