<link rel="stylesheet" href="\css\components\inicioSesion\formularioInicioSesion.css">

<div class="contenedor_formulario_inicio_sesion">
    <form class="formulario_inicio_sesion" action="" method="POST">
        @csrf
            <input type="email" id="correo" name="email" placeholder="Correo electrónico">
            <input type="password" id="clave" name="password" placeholder="Contraseña">

            <button type="submit">Iniciar Sesión</button>
    </form>
</div>