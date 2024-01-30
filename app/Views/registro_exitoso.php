<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos guardados</title>
</head>

<body>


    <form action="<?php echo base_url() ?>Usuarios/iniciarSesion" method="post">
        <h1>Registro exitoso</h1>

        <div class="boton">
            <input type="submit" value="Iniciar Sesión">
        </div>
    </form>
    <form action="<?php echo base_url() ?>Usuarios/logOut" method="post">
        <div class="boton">
            <input type="submit" value="Salir">
        </div>
    </form>



</body>

</html>