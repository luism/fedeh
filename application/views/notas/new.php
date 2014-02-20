<div class="row">
  <h2 class="">Nota</h2>
</div>
<?php echo Form::open('notas/new', array('role' => 'form', 'class' => 'form')); ?>
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
    <legend>Nuevo</legend>

        <!-- Comienza fila -->
      <!--  <div class="row">-->
          <div class="col-md-4">
            <div class="form-group">
              <label for="motivo">Motivo</label>
              <?php echo Form::input('motivo', $post['motivo'], array('class' => 'form-control', 'placeholder' => 'Motivo', 'autofocus', 'required' => '')) ?>
              <!--<input type="text" placeholder="Motivo" id="motivo" class="form-control">-->
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="dirigida_a">Dirigida a</label>
              <?php echo Form::input('dirigida_a', $post['dirigida_a'], array('class' => 'form-control', 'placeholder' => 'Dirigida a', 'autofocus', 'required' => '')) ?>
              <!--<input type="text" placeholder="Dirigida a" id="dirigida_a" class="form-control">-->
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="fecha_nota">Fecha de la nota</label>
              <?php echo Form::input('fecha_nota', $post['fecha_nota'], array('class' => 'form-control', 'placeholder' => 'Fecha de la nota', 'autofocus', 'required' => '')) ?>
              <!--<input type="text" placeholder="dd/mm/aaaa" id="fecha_nota" class="form-control">-->
            </div>
          </div>
         </div><!-- Fin de fila -->

        <!-- Comienza fila -->
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="expte_generado">N° de expediente generado</label>
              <?php echo Form::input('expte_generado', $post['expte_generado'], array('class' => 'form-control', 'placeholder' => 'N° de expdiente generado', 'autofocus')) ?>
              <!--<input type="text" placeholder="Expte. generado" id="expediente_generado" class="form-control">-->
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="entidad_expte">Entidad donde se generó el expediente</label>
              <?php echo Form::input('entidad_expte', $post['entidad_expte'], array('class' => 'form-control', 'placeholder' => 'Entidad del expediente', 'autofocus')) ?>
              <!--<input type="text" placeholder="Entidad expediente" id="entidad_expediente" class="form-control">-->
            </div>
          </div>
        </div><!-- Fin de fila -->

        <!-- Comienza fila -->
        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label for="fecha_expte">Fecha de Expediente</label>
              <?php echo Form::input('fecha_expte', $post['fecha_expte'], array('class' => 'form-control', 'placeholder' => 'Fecha de expediente', 'autofocus')) ?>
             <!-- <input type="text" placeholder="dd/mm/aaaa" id="fecha_expediente" class="form-control">-->
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

      </fieldset>
<?php echo Form::close(); ?><!-- Fin de Formulario -->