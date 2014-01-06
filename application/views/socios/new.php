<div class="row">
  <h2 class="">Socio</h2>
</div>
<?php echo Form::open(, array('role' => 'form', 'class' => 'form')); ?>
  <!-- Comienza fila -->
  <div class="row">

  <fieldset>

    <!-- Form Name -->
    <legend>Nuevo</legend>
    <div class="col-md-4">
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" placeholder="Nombre" id="nombre" class="form-control">
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <input type="text" placeholder="Apellidos" id="apellidos" class="form-control">
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="numero_ficha">Numero de Ficha</label>
        <input type="text" placeholder="Grupo Sanguíneo" id="numero_ficha" class="form-control">
      </div>
    </div>

    <div class="col-md-2">
      <div class="form-group">
        <label for="">Donante</label>
        <input type="checkbox" id="donante">
      </div>
    </div>
  </div><!-- Fin de fila -->

  <!-- Comienza fila -->
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="domicilio_personal">Domicilio Personal</label>
        <input type="text" placeholder="Domicilio Personal" id="domicilio_personal" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="domicilio_laboral">Domicilio Laboral</label>
        <input type="text" placeholder="Domicilio Laboral" id="domicilio_laboral" class="form-control">
      </div>
    </div>
  </div><!-- Fin de fila -->

  <!-- Comienza fila -->
  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <div class="form-group">
          <label for="telefono">Telefono</label>
          <input type="text" placeholder="Telefono" id="telefono" class="form-control">
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <label for="email">E-Mail</label>
        <input type="text" placeholder="E-Mail" id="email" class="form-control">
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="tipo_documento">Tipo Documento</label>
        <input type="text" placeholder="Tipo Documento" id="tipo_documento" class="form-control">
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="documento">Documento</label>
        <input type="text" placeholder="Documento" id="documento" class="form-control">
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="fecha_nacimiento">Fecha Nacimiento</label>
        <input type="text" placeholder="dd/mm/aaaa" id="fecha_nacimiento" class="form-control">
      </div>
    </div>
  </div><!-- Fin de fila -->

  <!-- Comienza fila -->
  <div class="row">
    <div class="col-md-2">
      <div class="form-group">
        <label for="">Aporte</label>
        <select id="aporte" class="form-control">
          <option value="">Mensual</option>
          <option value="">Trimestral</option>
          <option value="">Semestra</option>
          <option value="">Anual</option>
        </select>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="monto">Monto</label>
        <input type="text" placeholder="Monto" id="monto" class="form-control">
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="grupo_sanguineo">Grupo Sanguíneo</label>
        <input type="text" placeholder="Grupo Sanguíneo" id="grupo_sanguineo" class="form-control">
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

  </fieldset>
<?php echo Form::close(); ?><!-- Fin de Formulario -->