<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('css/form_usuario.css');?>"/>
    <title>Usuarios</title>
</head>

<body>  
    <form action="<?php echo base_url() ?>Usuarios/registrarse" method="post">
        <h2>Regístrate</h2>
        
        <div class="input-wrapper">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required>
        </div>

        <div class="input-wrapper">
            <label for="marca">Contraseña</label>
            <input type="password" name="password" required>
        </div>

        <input class="btn" type="submit" value="Enviar">
    </form>

    <form action="<?php echo base_url() ?>Usuarios/logOut" method="post">
        <input class="btn" type="submit" value="Salir">
    </form>
</body>
</html>