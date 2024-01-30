<?php helper('form'); // Sirve para cargar las funciones de validación ?>

  <div class="col-5 mx-auto">
      <form method="post" action="<?php echo base_url() ?>articulos/guardar">
          <h1 class="text-center my-5">Añadir artículo</h1>
          <?php
          if(!empty($datos_guardados))
          {
              ?>
              <div class="alert alert-success">Tu artículo ha sido publicado</div>
              <?php
          }
          else
          {
              echo validation_list_errors(); // Esta función genera un código HTML con los errores encontrados en la validación
          }
          ?>
          <div class="mb-4">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" name="nombre" class="form-control" value="<?php echo set_value('titulo') ?>" />  <!-- El value se rellena automáticamente con los datos que hubiera enviado el usuario -->
          </div>
          <div class="mb-4">
              <label for="descripcion" class="form-label">Descripción</label>
              <textarea name="descripcion" class="form-control"/><?php echo set_value('descripcion') ?></textarea>
          </div>
          <div class="mb-4">
              <label for="precio" class="form-label">Precio (€)</label>
              <input type="number" min="0" name="precio" class="form-control" value="<?php echo set_value('precio') ?>" />
          </div>
      
          <input type="submit" class="btn btn-success" value="Enviar">
      </div>
  </div>