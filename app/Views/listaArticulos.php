

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div>
    <?php 
    for ($i=0; $i<count($articulos); $i++){
    ?>

    <p>Artículo: <?php echo $articulos[$i]['nombre']?></p>
    <p>Marca: <?php echo $articulos[$i]['marca']?></p>
    <p>Precio: <?php echo $articulos[$i]['precio']?>€</p>

    <?php 
    $rutaImagen = base_url('imagenes/'.$articulos[$i]['imagen1']);
    ?>
    

    <p><img src="<?php echo $rutaImagen?>"/></p>
    <hr>
    <?php 
    }
    ?>





</div>
</body>
</html>
