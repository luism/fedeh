<div class="row">
  <h2 class="">Socio</h2>
</div>
<?php echo Form::open('socios' . ($socio->id ? '/edit/'. $socio->id : '/new'), array('role' => 'form', 'class' => 'form')); ?>
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
    <p class="bg-info"><legend><strong><?php echo $subtitulo ?></strong></legend></p>

    <div class="col-md-4">
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <?php echo Form::input('nombre', $persona->nombre, array('class' => 'form-control', 'placeholder' => 'Nombre', 'autofocus', 'required' => '')) ?>
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <?php echo Form::input('apellido', $persona->apellido, array('class' => 'form-control', 'placeholder' => 'Apellido', 'autofocus', 'required' => '')) ?>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="numero_ficha">Numero de Ficha</label>
        <?php echo Form::input('numero_ficha', $socio->numero_ficha, array('class' => 'form-control', 'placeholder' => 'Número de Ficha', 'autofocus', 'required' => '')) ?>
      </div>
    </div>

    <div class="col-md-2">
      <div class="form-group">
        <label for="">Donante</label>
        <?php echo Form::checkbox('donante', 'donante', isset($socio->donante) ? TRUE : FALSE) ?>
      </div>
    </div>
  </div><!-- Fin de fila -->

  <!-- Comienza fila -->
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="domicilio_personal">Domicilio Personal</label>
        <?php echo Form::input('domicilio_personal', $persona->domicilio_personal, array('class' => 'form-control', 'placeholder' => 'Domicilio Personal', 'autofocus', 'required' => '')) ?>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="domicilio_laboral">Domicilio Laboral</label>
        <?php echo Form::input('domicilio_laboral', $socio->domicilio_laboral, array('class' => 'form-control', 'placeholder' => 'Domicilio Laboral', 'autofocus')) ?>
      </div>
    </div>
  </div><!-- Fin de fila -->

  <!-- Comienza fila -->
  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <div class="form-group">
          <label for="telefono">Telefono</label>
          <?php echo Form::input('telefono', $persona->telefono, array('class' => 'form-control', 'placeholder' => 'Teléfono', 'autofocus', 'required' => '')) ?>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <label for="email">E-Mail</label>
        <?php echo Form::input('email', $persona->email, array('class' => 'form-control', 'placeholder' => 'E-Mail', 'autofocus', 'required' => '')) ?>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="tipo_documento">Tipo Documento</label>
        <?php echo Form::input('tipo_documento', $socio->tipo_documento, array('class' => 'form-control', 'placeholder' => 'Tipo Documento', 'autofocus', 'required' => '')) ?>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="nro_documento">Documento</label>
        <?php echo Form::input('nro_documento', $socio->nro_documento, array('class' => 'form-control', 'placeholder' => 'Documento', 'autofocus', 'required' => '')) ?>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="fecha_nacimiento">Fecha Nacimiento</label>
        <?php echo Form::input('fecha_nacimiento', Helper_Date::format(isset($socio->fecha_nacimiento) ? $socio->fecha_nacimiento : '', Helper_Date::DATE_ES), array('class' => 'form-control', 'placeholder' => 'dd/mm/aaaa', 'autofocus', 'required' => '')) ?>
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
        <?php echo Form::input('monto', $monto, array('class' => 'form-control', 'placeholder' => 'Monto', 'autofocus', 'required' => '')) ?>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="">Des. por planilla</label>
        <?php echo Form::checkbox('descuento_planilla', 'Descuento Planilla', isset($socio->descuento_planilla) ? TRUE : FALSE) ?>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="grupo_sanguineo">Grupo Sanguíneo</label>
        <?php echo Form::input('grupo_sanguineo', $persona->grupo_sanguineo, array('class' => 'form-control', 'placeholder' => 'Grupo Sanguíneo', 'autofocus')) ?>
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