<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/seleccionar_tonos.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="contenedor_seleccionar_tonos">
        <h4 class="texto_seleccionar_tonos_descripcion">Selecciona el tono de tu preferencia</h4>
        <div class="contenedor_tonos">
            <div class="tonos"></div>
            <div class="tonos"></div>
            <div class="tonos"></div>
            <div class="tonos"></div>
        </div>
        <h4 class="texto_seleccionar_tonos_descripcion">Descripción</h4>
        <h4 class="texto_seleccionar_tonos_descripcion">{{ $producto->descripcion }}</h4>
    </div>
    
</body>
</html>