<div class="row">
  <h2 class="">Evento</h2>
</div>
<?php echo Form::open('eventos/edit', array('role' => 'form', 'class' => 'form')); ?>
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
        <!--<legend>Nuevo</legend>-->
        
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <p class="bg-info"><legend><strong>Editar evento</strong></legend></p>

          <div class="col-md-4">
            <div class="form-group">
              <label for="nombre">Nombre del evento</label>
              <?php echo Form::input('nombre', $evento->nombre, array('class' => 'form-control', 'placeholder' => 'Nombre', 'autofocus', 'required' => '')) ?>
              <?php echo Form::hidden('id', $evento->id) ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="descripcion">Descripción</label>
              <?php echo Form::input('descripcion', $evento->descripcion, array('class' => 'form-control', 'placeholder' => 'Descripcion', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
        </div><!-- Fin de fila -->

        <!-- Comienza fila -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="lugar">Lugar del evento</label>
              <?php echo Form::input('lugar', $evento->lugar, array('class' => 'form-control', 'placeholder' => 'Lugar', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
          

        <div class="col-md-2">
            <div class="form-group">
              <label for="fecha">Fecha del evento</label>
              <?php echo Form::input('fecha', Helper_Date::format(isset($evento->fecha) ? $evento->fecha : '', Helper_Date::DATE_ES), array('class' => 'form-control', 'placeholder' => 'dd/mm/aaaa', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="hora">Hora evento</label>
              <?php echo Form::input('hora', $evento->hora, array('class' => 'form-control', 'placeholder' => 'Hora evento', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
        </div><!-- Fin de fila -->
        
        <!-- Comienza fila -->
        <div class="row">
           <div class="col-md-2">
            <div class="form-group">
              <label for="gastos_decoracion">Gastos de decoracion</label>
              <?php echo Form::input('gastos_decoracion', $evento->gastos_decoracion, array('class' => 'form-control', 'placeholder' => 'Gastos de decoracion', 'autofocus')) ?>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="gastos_imprenta">Gastos de imprenta</label>
              <?php echo Form::input('gastos_imprenta', $evento->gastos_imprenta, array('class' => 'form-control', 'placeholder' => 'Gastos de imprenta', 'autofocus')) ?>
            </div>
          </div>
          
           <div class="col-md-2">
            <div class="form-group">
              <label for="gastos_movilidad">Gastos de movilidad</label>
              <?php echo Form::input('gastos_movilidad', $evento->gastos_movilidad, array('class' => 'form-control', 'placeholder' => 'Gastos de movilidad', 'autofocus')) ?>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="gastos_permisos">Gastos de permisos</label>
              <?php echo Form::input('gastos_permisos', $evento->gastos_permisos, array('class' => 'form-control', 'placeholder' => 'Gastos de permisos', 'autofocus')) ?>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="gastos_servicios">Gastos de servicios</label>
              <?php echo Form::input('gastos_servicios', $evento->gastos_servicios, array('class' => 'form-control', 'placeholder' => 'Gastos de permisos', 'autofocus')) ?>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="gastos_tecnica">Gastos de técnica</label>
              <?php echo Form::input('gastos_tecnica', $evento->gastos_tecnica, array('class' => 'form-control', 'placeholder' => 'Gastos de técnica', 'autofocus')) ?>
            </div>
          </div>
        </div><!-- Fin de fila -->
        
        <!-- Comienza fila -->
        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label for="gastos_varios">Gastos varios</label>
              <?php echo Form::input('gastos_varios', $evento->gastos_varios, array('class' => 'form-control', 'placeholder' => 'Gastos varios', 'autofocus')) ?>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="ingresos">Ingresos del evento</label>
              <?php echo Form::input('ingresos', $evento->ingresos, array('class' => 'form-control', 'placeholder' => 'Ingresos del evento', 'autofocus')) ?>
            </div>
          </div>
         </div> 
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