<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/nombre_precio.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="contenedor_nombre_producto_especifico">
        <h1 class="nombre_producto_especifico">{{ $producto->nombre }}</h1>
        <div class="caracteristica_precio">
            <h4 class="caracteristica_producto">{{ $producto->caracteristica }}</h4>
            <h2 class="precio_producto">Bs.{{ $producto->precio }}</h2>
        </div>
    </div>
</body>

</html>