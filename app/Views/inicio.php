<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('css/incio.css');?>"/>
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
    <title>Wallapop</title>
</head>

<body>

<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <a href="" class="navbar-brand">Wallapop</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <form class="d-flex" role="search">
                <input
                  class="form-control me-2"
                  type="search"
                  placeholder="¿Qué estás buscando?"
                  aria-label="Search"
                />
                <button class="btn btn-outline-success" type="submit">
                  Buscar
                </button>
             </form>

            </li>


            <li class="nav-item">
                <a class="btn" aria-current="page" href="<?php echo base_url() ?>Usuarios/registro">Regístrate</a>
            </li>

            <li class="nav-item">
            <a class="btn" href="<?php echo base_url() ?>Usuarios/IniciarSesion">Inicia Sesión</a>
            </li>

            <!-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <img src="img/nasa-6.svg" alt="nasa" class="img-fluid" height="30px" width="30px" />
              </a>
            </li> -->

            
          </ul>
        </div>
      </div>
    </nav>

    <div class="col-9">
<div class="row justify-content-md-center">
    
    <div class="col-12 col-md-9 m-0 p-4">
        <div class="card shadow">
            <img src="https://media.ldlc.com/r1600/ld/products/00/06/07/27/LD0006072715.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Nintendo Switch OLED (Edición limitada Mario Rojo)</h5>
                <p class="card-text">Consola híbrida doméstica/portátil con pantalla OLED</p>
                <a target="_blank" href="https://www.ldlc.com/es-es/ficha/PB00575189.html" class="btn btn-primary">Buscar en tiendas</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-9 m-0 p-4">
        <div class="card shadow">
            <img src="https://cdn.grupoelcorteingles.es/SGFM/dctm/MEDIA03/202112/01/00128635707863____3__1200x1200.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Razer Deathadder Essential</h5>
                <p class="card-text">Ratón Gaming</p>
                <a target="_blank" href="https://www.elcorteingles.es/electronica/A41772030-raton-gaming-razer-deathadder-essential/" class="btn btn-primary">Buscar en tienda</a>
            </div>
        </div>
    </div>


</div>
</div>
</div>


</body>
</html>