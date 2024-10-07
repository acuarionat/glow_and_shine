<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/tarjeta_Producto.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="contenedor_tarjeta">
        <a href="/producto/{{ $producto->id_producto }}">
            <div class="contenedor_imagen_tarjeta">
                <img src="{{ $producto->direccion_imagen }}" alt="{{ $producto->nombre }}" class="producto_catalogo">
            </div>
            <h3 class="informacion_producto">{{ $producto->nombre }}</h3>
            <h3 class="informacion_producto">Bs. {{ $producto->precio }}</h3>
        </a>
    </div>

</body>

</html>