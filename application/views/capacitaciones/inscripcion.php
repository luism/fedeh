<div class="row">
  <h2 class="">Inscripcion</h2>
</div>
<?php echo Form::open('capacitaciones/new', array('role' => 'form', 'class' => 'form')); ?>
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
          <label for="perona">Persona</label>
          <?php echo Form::input('persona', '', array('class' => 'form-control', 'placeholder' => 'Persona', 'autofocus', 'required' => '')) ?>
        </div>
      </div>
    </div><!-- Fin de fila -->

    <!-- Comienza fila -->
    <div class="row">      
      <div class="col-md-8">
        <div class="form-group">
          <label for="capacitacion">Capacitacion</label>
          <?php echo Form::select('capacitacion_id', array('--Sleccione', 'Capacitacion 1', 'Capacitacion 2'), NULL, array('class'=>'form-control')) ?>
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