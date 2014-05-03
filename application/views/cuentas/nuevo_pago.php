<div class="row">
  <h2 class="">Cuentas</h2>
</div>

<!-- Form Name -->
<?php echo Form::open('cuentas/nuevo_pago', array('role' => 'form', 'class' => 'form')); ?>

  <?php if ($errors) { ?>
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
  
  <!-- Comienza fila -->
  <p class="bg-info"><legend><strong>Nuevo Pgo</strong></legend></p>
  <div class="row">
    <!--<legend>Nuevo</legend>-->
    
    <div class="col-md-4">
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <?php echo Form::input('nombre', '', array('class' => 'form-control', 'placeholder' => 'Nombre', 'autofocus', 'required' => '')) ?>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <?php echo Form::input('apellido', '', array('class' => 'form-control', 'placeholder' => 'Apellido', 'autofocus', 'required' => '')) ?>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="numero_ficha">Numero de Ficha</label>
        <?php echo Form::input('numero_ficha', '', array('class' => 'form-control', 'placeholder' => 'Número de Ficha', 'autofocus', 'required' => '')) ?>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="">Donante</label>
        <?php echo Form::checkbox('donante', 'donante', isset($post['donante']) ? TRUE : FALSE) ?>
      </div>
    </div>
  </div><!-- Fin de fila -->

  
  
  <!-- Comienza fila -->
  <div class="row">
    <div class="col-md-2">
      <div class="form-group">
        <label for="">Aporte</label>
        <?php echo Form::select('tipo_aporte', array(), NULL, array('class'=>'form-control')) ?>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="monto">Monto</label>
        <?php echo Form::input('monto', '', array('class' => 'form-control', 'placeholder' => 'Monto', 'autofocus', 'required' => '')) ?>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="">Des. por planilla</label>
        <?php echo Form::checkbox('descuento_planilla', 'Descuento Planilla', isset($post['descuento_planilla']) ? TRUE : FALSE) ?>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="grupo_sanguineo">Grupo Sanguíneo</label>
        <?php echo Form::input('grupo_sanguineo', '', array('class' => 'form-control', 'placeholder' => 'Grupo Sanguíneo', 'autofocus', 'required' => '')) ?>
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