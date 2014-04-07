 <div class="row">
  <h2 class="">Empresa</h2>
</div>
<?php echo Form::open('empresas' . ($empresa->id ? '/edit/' . $empresa->id : '/new'), array('role' => 'form', 'class' => 'form')); ?>
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
        
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <p class="bg-info"><legend><strong><?php echo $subtitulo ?></strong></legend></p>
        
          <div class="col-md-4">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <?php echo Form::input('nombre', $persona->nombre, array('class' => 'form-control', 'placeholder' => 'Nombre contacto', 'autofocus', 'required' => '')) ?>
            </div>
            <div class="form-group">
              <label for="nombre_empresa">Nombre de la empresa</label>
              <?php echo Form::input('nombre_empresa', $empresa->nombre_empresa, array('class' => 'form-control', 'placeholder' => 'Nombre de la empresa', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="apellido">Apellido</label>
              <?php echo Form::input('apellido', $persona->apellido, array('class' => 'form-control', 'placeholder' => 'Apellido contacto', 'autofocus', 'required' => '')) ?>
            </div>
           </div> 
          <div class="col-md-6">
            <div class="form-group">
              <label for="domicilio_personal">Domicilio</label>
              <?php echo Form::input('domicilio_personal', $persona->domicilio_personal, array('class' => 'form-control', 'placeholder' => 'Domicilio', 'autofocus', 'required' => '')) ?>
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
              <label for="rubro">Rubro</label>
              <?php echo Form::input('rubro', $empresa->rubro, array('class' => 'form-control', 'placeholder' => 'Rubro', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="cuit">CUIT</label>
              <?php echo Form::input('cuit', $empresa->cuit, array('class' => 'form-control', 'placeholder' => 'CUIT', 'autofocus', 'required' => '')) ?>
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