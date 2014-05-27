<div class="row">
  <h2 class="">Inscripcion</h2>
</div>
<?php echo Form::open('capacitaciones/new', array('role' => 'form', 'class' => 'form-horizontal')); ?>
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
    
  <legend>Nuevo</legend>

  <div class="form-group">
    <label class="control-label col-md-4" for="persona">Persona</label>
    <div class="col-md-5">
      <?php echo Form::input('persona', '', array('class' => 'form-control input-md', 'placeholder' => 'Persona', 'autofocus', 'required' => '')) ?>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="capacitacion">Capacitacion</label>
    <div class="col-md-5">
      <?php echo Form::select('capacitacion_id', array('--Seleccione', 'Capacitacion 1', 'Capacitacion 2'), NULL, array('class'=>'form-control input-md')) ?>
    </div>
  </div>

  <div class="form-group">
  <label class="col-md-4 control-label" for="save"></label>
  <div class="col-md-4">
      <?php echo Form::submit('save', 'Guardar', array('id' => 'save', 'class' => 'btn btn-primary')); ?>
      <?php echo Form::button('cancel', 'Cancelar', array('id' => 'cancel', 'class' => 'btn btn-danger')); ?>
  </div>
  </div>

  </fieldset>
<?php echo Form::close(); ?><!-- Fin de Formulario -->