<div class="row">
  <h2 class="">Inscripcion</h2>
</div>
<?php echo Form::open(NULL, array('role' => 'form', 'class' => 'form')); ?>
  <?php if (isset($errors) && $errors) { ?>
  <div class="row">
    <!-- Mensajes de error -->
    <div class="alert-danger alert alert-dismissable">
      <strong>Hubo un error</strong>
      <p class="message">Se encontraron algunos errores, por favor verifique los datos ingresados.</p>
      <p>
      <ul class="errors">
      <?php foreach ($errors as $message): ?>
          <li><?php echo $message ?></li>
      <?php endforeach ?>
      
      </ul>
      </p>
    </div>
  </div>
  <?php } ?> 

  <!-- Comienza fila -->
  <fieldset>
    <div class="row">
      <p class="bg-info"><legend><strong>Nuevo</strong></legend></p>          

      <div class="col-md-8">
        <div class="form-group">
          <label for="name">Nombre</label>
          <?php echo Form::input('name', '', array('class' => 'form-control', 'placeholder' => 'Nombre', 'autofocus', 'required' => '')) ?>
        </div>
      </div>
    </div><!-- Fin de fila -->

    <!-- Comienza fila -->
    <div class="row">      
      <div class="col-md-8">
        <div class="form-group">
          <label for="description">Descripcion</label>
          <?php echo Form::input('description', '', array('class' => 'form-control', 'placeholder' => 'Descripcion', 'autofocus', 'required' => '')) ?>
        </div>
      </div>
    </div><!-- Fin de fila -->

    <!-- Button (Double) -->
    <div class="row">      
      <div class="col-md-12">
        <div class="form-group">
          <div class="col-md-8">
          <?php echo Form::submit('save', 'Guardar', array('id' => 'save', 'class' => 'btn btn-primary')); ?>
          <?php echo Form::button('cancel', 'Cancelar', array('id' => 'cancel', 'class' => 'btn btn-danger')); ?>
          </div>
        </div>
      </div>
    </div><!-- Fin de fila -->

  </fieldset>
<?php echo Form::close(); ?><!-- Fin de Formulario -->