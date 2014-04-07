<div class="row">
  <h2 class="">Contacto</h2>
</div>
<?php echo Form::open('contactos' . ($contacto->id ? '/edit/' . $contacto->id : '/new/'), array('role' => 'form', 'class' => 'form')); ?>
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
              <label for="">Donante</label>
              <?php echo Form::checkbox('donante', 'donante', isset($persona->donante) ? TRUE : FALSE) ?>
            </div>
          </div>
        </div><!-- Fin de fila -->

        <!-- Comienza fila -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="domicilio_personal">Domicilio Personal</label>
              <?php echo Form::input('domicilio_personal', $persona->domicilio_personal, array('class' => 'form-control', 'placeholder' => 'Domicilio Personal', 'autofocus')) ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="domicilio_laboral">Domicilio Laboral</label>
              <?php echo Form::input('domicilio_laboral', $contacto->domicilio_laboral, array('class' => 'form-control', 'placeholder' => 'Domicilio Laboral', 'autofocus')) ?>
            </div>
          </div>
        </div><!-- Fin de fila -->

        <!-- Comienza fila -->
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <div class="form-group">
                <label for="telefono">Teléfono</label>
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
          <div class="col-md-4">
            <div class="form-group">
              <label for="profesion">Profesión</label>
              <?php echo Form::input('profesion', $contacto->profesion, array('class' => 'form-control', 'placeholder' => 'Profesion', 'autofocus')) ?>
            </div>
          </div>
        </div><!-- Fin de fila -->

        <!-- Comienza fila -->
        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label for="grupo_sanguineo">Grupo Sanguíneo</label>
              <?php echo Form::input('grupo_sanguineo', $persona->grupo_sanguineo, array('class' => 'form-control', 'placeholder' => 'Grupo Sanguíneo', 'autofocus')) ?>
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