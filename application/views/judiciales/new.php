<div class="row">
  <h2 class="">Judicial</h2>
</div>
<?php echo Form::open('judiciales/new', array('role' => 'form', 'class' => 'form')); ?>
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
              <?php echo Form::input('apellidos', $post['apellidos'], array('class' => 'form-control', 'placeholder' => 'Apellidos', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="numero_oficio">Numero de Oficio</label>
              <?php echo Form::input('numero_oficio', $post['numero_oficio'], array('class' => 'form-control', 'placeholder' => 'Numero de Oficio', 'autofocus', 'required' => '')) ?>
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
          <!--<div class="col-md-6">
            <div class="form-group">
              <label for="domicilio_legal">Domicilio Legal</label>
              <input type="text" placeholder="Domicilio Legal" id="domicilio_legal" class="form-control">
            </div>
          </div>-->
        </div><!-- Fin de fila -->

        <!-- Comienza fila -->
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <div class="form-group">
                <label for="telefono">Telefono</label>
                <?php echo Form::input('telefono', $post['telefono'], array('class' => 'form-control', 'placeholder' => 'Telefono', 'autofocus', 'required' => '')) ?>
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
              <label for="documento">Documento</label>
              <?php echo Form::input('documento', $post['documento'], array('class' => 'form-control', 'placeholder' => 'Documento', 'autofocus', 'required' => '')) ?>
            </div>
          <!--</div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="fecha_nacimiento">Fecha Nacimiento</label>
              <input type="text" placeholder="dd/mm/aaaa" id="fecha_nacimiento" class="form-control">
            </div>-->
          </div>
        </div><!-- Fin de fila -->

        <!-- Comienza fila -->
        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label for="cantidad_cuotas">Cantidad de cuotas</label>
              <?php echo Form::input('cantidad_cuotas', $post['cantidad_cuotas'], array('class' => 'form-control', 'placeholder' => 'Cantidad de cuotas', 'autofocus', 'required' => '')) ?>
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
              <label for="grupo_sanguineo">Grupo Sanguíneo</label>
              <?php echo Form::input('grupo_sanguineo', $post['grupo_sanguineo'], array('class' => 'form-control', 'placeholder' => 'Grupo Sanguíneo', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
        </div><!-- Fin de fila -->
        
        <!-- Comienza fila -->
        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label for="juzgado">Juzgado</label>
              <?php echo Form::input('juzgado', $post['juzgado'], array('class' => 'form-control', 'placeholder' => 'Juzgado', 'autofocus', 'required' => '')) ?>
             </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="causa">Causa</label>
              <?php echo Form::input('causa', $post['causa'], array('class' => 'form-control', 'placeholder' => 'Causa', 'autofocus', 'required' => '')) ?>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="fecha_oficio">Fecha del Oficio</label>
              <?php echo Form::input('fecha_oficio', $post['fecha_oficio'], array('class' => 'form-control', 'placeholder' => 'Fecha del Oficio', 'autofocus', 'required' => '')) ?>
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