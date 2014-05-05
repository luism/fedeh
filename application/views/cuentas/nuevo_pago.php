<div class="row">
  <h2 class="">Cuentas</h2>
</div>

<!-- Form Name -->
<?php echo Form::open('cuentas/nuevo_pago', array('role' => 'form', 'class' => 'form')); ?>
  <?php echo Form::hidden('csrf', Security::token()); ?>

  <?php if (isset($errors)) { ?>
  <div class="row">
    <!-- Mensajes de error -->
    <div class="alert-danger alert alert-dismissable">
      <strong>Hubo un error</strong>
      <p class="message">Se encontraron algunos errores, por favor verifique los datos ingresados.</p>
      <p>
      <ul class="errors">
      <?php foreach ($errors as $message) ?>
          <li><?php echo $message ?></li>      
      </ul>
      </p>
    </div>
  </div>
  <?php } ?> 

  <fieldset>

    <p class="bg-info"><legend><strong>Nuevo Pago</strong></legend></p>
    <!-- Comienza fila -->
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Tipo entidad</label>
          <?php echo Form::select('tipo_id', $tipo_arr, $tipo_id, array('class'=>'chosen tipo form-control')) ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Persona</label>
          <?php echo Form::select('persona_id', $personas, NULL, array('class'=>'chosen persona form-control')) ?>
        </div>
      </div>
      <script type="text/javascript">
      $(window).load(function(){
        $('.chosen.persona').chosen({no_results_text: "No se encontro la persona"});
      });
      </script>
    </div><!-- Fin de fila -->

    <!-- Comienza fila -->
    <div class="row">    
      <div class="col-md-12">
        <div class="form-group">
          <label for="numero_ficha">Detalle</label>
          <?php echo Form::input('detalle', $pago->detalle, array('class' => 'form-control', 'placeholder' => 'Detalle', 'autofocus', 'required' => '')) ?>
        </div>
      </div>
    </div><!-- Fin de fila -->

    <!-- Comienza fila -->
    <div class="row">    
      <div class="col-md-6">
        <div class="form-group">
          <label for="numero_ficha">Comprobante</label>
          <?php echo Form::input('numero_comprobante', $pago->numero_comprobante, array('class' => 'form-control', 'placeholder' => 'Comprobante', 'autofocus')) ?>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <label for="apellidos">Fecha Comprobante</label>
          <?php echo Form::input('fecha_comprobante', $pago->fecha_comprobante, array('class' => 'form-control', 'placeholder' => 'Fecha Comprobante', 'autofocus')) ?>
        </div>
      </div>   
      <div class="col-md-2">
        <div class="form-group">
          <!-- Haber -->
          <label for="nombre">Monto</label>
          <?php echo Form::input('haber', $pago->haber, array('class' => 'form-control', 'placeholder' => '$', 'autofocus', 'required' => '')) ?>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <label for="apellidos">Fecha</label>
          <?php echo Form::input('fecha_cta_cte', $pago->fecha_cta_cte, array('class' => 'form-control', 'placeholder' => 'Fecha', 'autofocus', 'required' => '')) ?>
        </div>
      </div>
    </div><!-- Fin de fila -->
      
    <div class="row">
      <!-- Button (Double) -->
      <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::submit('save', 'Guardar', array('id' => 'save', 'class' => 'btn btn-primary')); ?>
            <?php echo Form::button('cancel', 'Cancelar', array('id' => 'cancel', 'class' => 'btn btn-danger')); ?>
        </div>
      </div>
    </div><!-- Fin de fila -->
  </fieldset>
<?php echo Form::close(); ?><!-- Fin de Formulario -->