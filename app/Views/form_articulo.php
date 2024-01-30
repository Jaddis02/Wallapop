<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
        />
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
        ></script>
    <title>Artículos</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <a href="" class="navbar-brand">Wallapop</a>

            <!-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <img src="img/nasa-6.svg" alt="nasa" class="img-fluid" height="30px" width="30px" />
              </a>
            </li> -->

            <li class="nav-item">
            <a class="btn" href="<?php echo base_url() ?>Usuarios/cerrarSesion">Cerrar Sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="total">

    <h1>Describe el artículo que quieres subir</h1>

        <?php
        if(isset($guardado)){
        ?>
            <p>Los datos se han guardado correctamente</p>
            <a href="<?php echo base_url()?>">Volver</a>
        <?php  
            }else{
        ?>

        <form method="post" action="<?php echo base_url()?>Articulos/guardar" enctype="multipart/form-data">

                <div class="input-wrapper">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" required/>
                </div>

                <div class="input-wrapper">
                    <label for="marca">Marca</label>
                    <input type="texto" name="marca" required/>
                </div> 


                <div class="input-wrapper">
                    <label for="precio">Precio</label>
                    <input type="number" name="precio" required/>
                </div> 

                <div class="input-wrapper">
                    <label for="imagen">Imagen</label>
                    <input type="file" name="imagen">

                </div>

            <div>
                <input class="btn" type="submit" value="Enviar">
            </div>
        </div>
        </form>
        <?php 
        }
        ?>

    </div>
</body>
</html>