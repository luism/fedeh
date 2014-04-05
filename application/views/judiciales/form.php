<div class="row">
  <h2 class="">Judicial</h2>
</div>
<?php echo Form::open('judiciales' . ($judicial->id ? '/edit/' . $judicial->id : '/new/'), array('role' => 'form', 'class' => 'form')); ?>
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
              <?php echo Form::input('apellido',$persona->apellido, array('class' => 'form-control', 'placeholder' => 'Apellidos', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="numero_oficio">Numero de Oficio</label>
              <?php echo Form::input('numero_oficio', $judicial->numero_oficio, array('class' => 'form-control', 'placeholder' => 'Numero de Oficio', 'autofocus', 'required' => '')) ?>
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
              <?php echo Form::input('domicilio_personal', $persona->domicilio_personal, array('class' => 'form-control', 'placeholder' => 'Domicilio Personal', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <div class="form-group">
                <label for="telefono">Telefono</label>
                <?php echo Form::input('telefono', $persona->telefono, array('class' => 'form-control', 'placeholder' => 'Telefono', 'autofocus', 'required' => '')) ?>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="email">E-Mail</label>
              <?php echo Form::input('email', $persona->email, array('class' => 'form-control', 'placeholder' => 'E-Mail', 'autofocus', 'required' => '')) ?>
            </div>
          </div><!-- Fin de fila -->

        <!-- Comienza fila -->
        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label for="cantidad_cuotas">Cantidad de cuotas</label>
              <?php echo Form::input('cantidad_cuotas', $judicial->cantidad_cuotas, array('class' => 'form-control', 'placeholder' => 'Cantidad de cuotas', 'autofocus', 'required' => '')) ?>
             </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="monto">Monto</label>
              <?php echo Form::input('monto_cuotas', $judicial->monto_cuotas, array('class' => 'form-control', 'placeholder' => 'Monto', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="grupo_sanguineo">Grupo Sanguíneo</label>
              <?php echo Form::input('grupo_sanguineo', $persona->grupo_sanguineo, array('class' => 'form-control', 'placeholder' => 'Grupo Sanguíneo', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
        </div><!-- Fin de fila -->
        
        <!-- Comienza fila -->
        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label for="juzgado">Juzgado</label>
              <?php echo Form::input('juzgado', $judicial->juzgado, array('class' => 'form-control', 'placeholder' => 'Juzgado', 'autofocus', 'required' => '')) ?>
             </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="causa">Causa</label>
              <?php echo Form::input('causa', $judicial->causa, array('class' => 'form-control', 'placeholder' => 'Causa', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="fecha_oficio">Fecha del oficio</label>
              <?php echo Form::input('fecha_oficio', Helper_Date::format(isset($judicial->fecha_oficio) ? $judicial->fecha_oficio: '', Helper_Date::DATE_ES), array('class' => 'form-control', 'placeholder' => 'dd/mm/aaaa', 'autofocus', 'required' => '')) ?>
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