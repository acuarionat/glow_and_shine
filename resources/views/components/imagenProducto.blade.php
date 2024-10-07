<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/imagen_producto.css') }}">
    
</head>
<body>
    @if(isset($producto))
    <div class="contenedor_imagen_producto">
        <img src="{{ $producto->direccion_imagen }}" alt="{{ $producto->nombre }}" class="imagen_producto">
    </div>
    @else
    <p>Producto no encontrado</p>
    @endif

</body>
</html>
