<div class="row">
  <h2 class="">Capacitacion</h2>
</div>
<?php echo Form::open('capacitaciones/edit/' . $capacitacion->id, array('role' => 'form', 'class' => 'form')); ?>
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
        <!--<legend>Nuevo</legend>  -->
        
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <p class="bg-info"><legend><strong>Editar capacitacion</strong></legend></p>          

          <div class="col-md-4">
            <div class="form-group">
              <label for="titulo">Título</label>
              <?php echo Form::input('titulo', $capacitacion->titulo, array('class' => 'form-control', 'placeholder' => 'Título', 'autofocus', 'required' => '')) ?>
              <?php echo Form::hidden('id', $capacitacion->id) ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="descripcion">Descripción</label>
              <?php echo Form::input('descripcion', $capacitacion->descripcion, array('class' => 'form-control', 'placeholder' => 'Descripcion', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="cupos">Cupos</label>
              <?php echo Form::input('cupos', $capacitacion->cupos, array('class' => 'form-control', 'placeholder' => 'Cupos', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
         </div><!-- Fin de fila -->

          <!-- Comienza fila -->
        <div class="row">      
          <div class="col-md-2">
            <div class="form-group">
              <label for="fecha_capacitacion">Fecha de Capacitación</label>
              <?php echo Form::input('fecha_capacitacion', Helper_Date::format(isset($capacitacion->fecha_capacitacion) ? $capacitacion->fecha_capacitacion : '', Helper_Date::DATE_ES), array('class' => 'form-control', 'placeholder' => 'dd/mm/aaaa', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="hora">Hora</label>
              <?php echo Form::input('hora', $capacitacion->hora, array('class' => 'form-control', 'placeholder' => 'Hora', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="lugar">Nombre Lugar</label>
              <?php echo Form::input('lugar', $capacitacion->lugar, array('class' => 'form-control', 'placeholder' => 'Nombre Lugar', 'autofocus', 'required' => '')) ?>
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