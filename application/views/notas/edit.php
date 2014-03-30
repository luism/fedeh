
<div class="row">
  <h2 class="">Nota</h2>
</div>
<?php echo Form::open('notas/edit/' . $nota->id, array('role' => 'form', 'class' => 'form')); ?>
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
    <p class="bg-info"><legend><strong>Nuevo</strong></legend></p>

         <div class="col-md-4">
            <div class="form-group">
              <label for="motivo">Motivo</label>
              <?php echo Form::input('motivo', $nota->motivo, array('class' => 'form-control', 'placeholder' => 'Motivo', 'autofocus', 'required' => '')) ?>
              <?php echo Form::hidden('id', $nota->id) ?>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="dirigida_a">Dirigida a</label>
              <?php echo Form::input('dirigida_a', $nota->dirigida_a, array('class' => 'form-control', 'placeholder' => 'Dirigida a', 'autofocus', 'required' => '')) ?>
              <!--<input type="text" placeholder="Dirigida a" id="dirigida_a" class="form-control">-->
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="fecha_nota">Fecha de la nota</label>
              <?php echo Form::input('fecha_nota', Helper_Date::format(isset($nota->fecha_nota) ? $nota->fecha_nota : '', Helper_Date::DATE_ES), array('class' => 'form-control', 'placeholder' => 'dd/mm/aaaa', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
         </div><!-- Fin de fila -->

        <!-- Comienza fila -->
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="expte_generado">N° de expediente generado</label>
              <?php echo Form::input('expte_generado', $nota->expte_generado, array('class' => 'form-control', 'placeholder' => 'N° de expdiente generado', 'autofocus')) ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="entidad_expte">Entidad donde se generó el expediente</label>
              <?php echo Form::input('entidad_expte', $nota->entidad_expte, array('class' => 'form-control', 'placeholder' => 'Entidad del expediente', 'autofocus')) ?>
            </div>
          </div>
        </div><!-- Fin de fila -->

        <!-- Comienza fila -->
        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label for="fecha_expte">Fecha de Expediente</label>
              <?php echo Form::input('fecha_expte', Helper_Date::format(isset($nota->fecha_expte) ? $nota->fecha_expte : '', Helper_Date::DATE_ES), array('class' => 'form-control', 'placeholder' => 'dd/mm/aaaa', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
        </div>  
          <!--<div class="col-md-2">
            <div class="form-group">
              <label for="hora_expediente">Hora</label>
              <input type="text" placeholder="hh:mm" id="hora_expediente" class="form-control">
            </div>
          </div>-->
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