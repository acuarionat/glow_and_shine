<link rel="stylesheet" href="{{ asset('css/formularioR.css') }}">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<div class="form_registro"  >
    <form action="/posts" method="POST" class="form">
            @csrf
            <input type="text" placeholder="Nombres" required>
            <input type="text" placeholder="Apellido paterno" required>
            <input type="text" placeholder="Apellido materno">
            <input type="email" placeholder="Correo Electrónico" required>
            <input type="text" placeholder="CI" required>
            <input type="password" placeholder="Contraseña" required>
            <input type="password" placeholder="Confirmar Contraseña" required>
            
    </form>
    <button type="submit" class="boton_submit">Crear cuenta</button>
    
</div>