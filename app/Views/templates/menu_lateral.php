<body>
    <div class="row">
        <div class="col-3 p-3 text-white bg-dark">
            <a href="<?php echo base_url(); ?>Articulos/mostrar_articulo" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">Bienvenido</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">

            <?php 
            // $claseIni='';
            $claseArt='';


            // if($seleccionado=='inicio'){
            //     $claseIni='active';
            // }

            if ($seleccionado =='Ver mis artículos') {
                $claseArt='active';
            }


            ?>
        
                <li class="articulos">
                    <a href="<?php echo base_url(); ?>Articulos/crear" class="nav-link <?php echo $claseArt ?> 
                     text-white" onclick="articulos()">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Ver mis artículos
                    </a>
                </li>
                
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>Chaska</strong>
                </a>
            </div>
        </div>