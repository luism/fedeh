<div class="row">
  <h2 class="">Socio</h2>
</div>
<?php echo Form::open('socios/new', array('role' => 'form', 'class' => 'form')); ?>
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
    <div class="col-md-4">
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <?php echo Form::input('nombre', $post['nombre'], array('class' => 'form-control', 'placeholder' => 'Nombre', 'autofocus', 'required' => '')) ?>
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <?php echo Form::input('apellido', $post['apellido'], array('class' => 'form-control', 'placeholder' => 'Apellido', 'autofocus', 'required' => '')) ?>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="numero_ficha">Numero de Ficha</label>
        <?php echo Form::input('numero_ficha', $post['numero_ficha'], array('class' => 'form-control', 'placeholder' => 'Número de Ficha', 'autofocus', 'required' => '')) ?>
      </div>
    </div>

    <div class="col-md-2">
      <div class="form-group">
        <label for="">Donante</label>
        <?php echo Form::checkbox('donante', 'Donante', $post['donante']) ?>
      </div>
    </div>
  </div><!-- Fin de fila -->

  <!-- Comienza fila -->
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="domicilio_personal">Domicilio Personal</label>
        <?php echo Form::input('domicilio_personal', $post['domicilio_personal'], array('class' => 'form-control', 'placeholder' => 'Domicilio Personal', 'autofocus', 'required' => '')) ?>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="domicilio_laboral">Domicilio Laboral</label>
        <?php echo Form::input('domicilio_laboral', $post['domicilio_laboral'], array('class' => 'form-control', 'placeholder' => 'Domicilio Laboral', 'autofocus')) ?>
      </div>
    </div>
  </div><!-- Fin de fila -->

  <!-- Comienza fila -->
  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <div class="form-group">
          <label for="telefono">Telefono</label>
          <?php echo Form::input('telefono', $post['telefono'], array('class' => 'form-control', 'placeholder' => 'Teléfono', 'autofocus', 'required' => '')) ?>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <label for="email">E-Mail</label>
        <?php echo Form::input('email', $post['email'], array('class' => 'form-control', 'placeholder' => 'E-Mail', 'autofocus', 'required' => '')) ?>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="tipo_documento">Tipo Documento</label>
        <?php echo Form::input('tipo_documento', $post['tipo_documento'], array('class' => 'form-control', 'placeholder' => 'Tipo Documento', 'autofocus', 'required' => '')) ?>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="nro_documento">Documento</label>
        <?php echo Form::input('nro_documento', $post['nro_documento'], array('class' => 'form-control', 'placeholder' => 'Documento', 'autofocus', 'required' => '')) ?>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="fecha_nacimiento">Fecha Nacimiento</label>
        <?php echo Form::input('fecha_nacimiento', $post['fecha_nacimiento'], array('class' => 'form-control', 'placeholder' => 'dd/mm/aaaa', 'autofocus', 'required' => '')) ?>
      </div>
    </div>
  </div><!-- Fin de fila -->

  <!-- Comienza fila -->
  <div class="row">
    <div class="col-md-2">
      <div class="form-group">
        <label for="">Aporte</label>
        <?php echo Form::select('tipo_aporte', $tipos_aportes, NULL, array('class'=>'form-control')) ?>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="monto">Monto</label>
        <?php echo Form::input('monto', $post['monto'], array('class' => 'form-control', 'placeholder' => 'Monto', 'autofocus', 'required' => '')) ?>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="">Des. por planilla</label>
        <?php echo Form::checkbox('descuento_planilla', 'Descuento Planilla', $post['descuento_planilla']) ?>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="grupo_sanguineo">Grupo Sanguíneo</label>
        <?php echo Form::input('grupo_sanguineo', $post['grupo_sanguineo'], array('class' => 'form-control', 'placeholder' => 'Grupo Sanguíneo', 'autofocus', 'required' => '')) ?>
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