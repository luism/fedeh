<div class="row">
  <h2 class="">Asignar Fichas a Colaborador</h2>
</div>
<?php echo Form::open('colaboradores/asignar', array('role' => 'form', 'class' => 'form')); ?>
  <?php if ($errors) { ?>
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
        <div class="row">
        <fieldset>

        <!-- Form Name -->
        
        <p class="bg-info"><legend><strong>Nuevo</strong></legend></p>

          <div class="col-md-4">
            <div class="form-group">
              <label for="nombre">Desde</label>
              <?php echo Form::input('desde_ficha', '', array('class' => 'form-control', 'placeholder' => 'Desde', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="apellidos">Hasta</label>
              <?php echo Form::input('hasta_ficha', '', array('class' => 'form-control', 'placeholder' => 'Hasta', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="">Colaborador</label>
              <?php echo Form::select('colaborador_id', $colaboradores, NULL, array('class'=>'form-control')) ?>
            </div>
          </div>
        </div><!-- Fin de fila -->



<!-- Button (Double) -->
    <div class="col-md-12">
      <div class="form-group">
        <div class="col-md-8">
          <?php echo Form::submit('save', 'Guardar', array('id' => 'save', 'class' => 'btn btn-primary')); ?>
          <?php echo Form::button('cancel', 'Cancelar', array('id' => 'cancel', 'class' => 'btn btn-danger')); ?>
        </div>
      </div>
    </div>
  </div><!-- Fin de fila -->
     <br>
  </fieldset>
<?php echo Form::close(); ?><!-- Fin de Formulario -->