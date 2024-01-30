<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('css/login.css');?>"/>
    <title>Usuarios</title>
</head>

<body>

    <h1>Inicia Sesión</h1>
    <form action="<?php echo base_url() ?>Usuarios/logIn" method="post">
        <div class="input-wrapper">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required>
        </div>

        <div class="input-wrapper">
            <label for="password">Contraseña</label>
            <input type="password" name="password" required>
        </div>

        <input class="btn" type="submit" value="Enviar">

    </form>

    <form action="<?php echo base_url() ?>Usuarios/logOut" method="post">

        <input class="btn" type="submit" value="Salir">

    </form>

    </div>
    

</body>
</html>
</body>
</html>