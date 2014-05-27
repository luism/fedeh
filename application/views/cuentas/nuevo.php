<div class="row">
  <h2 class="">Cuenta</h2>
</div>
<?php echo Form::open('capacitaciones/new', array('role' => 'form', 'class' => 'form-horizontal')); ?>
  <?php if (isset($errors) && $errors) { ?>
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

<!-- <form class="form-horizontal"> -->
<fieldset>

<!-- Form Name -->
<legend>Nueva cuenta</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="person">Persona</label>  
  <div class="col-md-5">
  <input id="persona" name="persona" type="text" placeholder="Persona" class="form-control input-md" required="">
  <span class="help-block">Seleccione la persona</span>  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tipo_cuenta">Tipo de Cuenta</label>
  <div class="col-md-5">
    <select id="tipo_cuenta" name="tipo_cuenta" class="form-control">
      <option value="1">Socio</option>
      <option value="2">Persona</option>
      <option value="3">Judicial</option>
    </select>
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cuotas">Cuotas</label>
  <div class="col-md-4">
    <input id="cuotas" name="cuotas" type="search" placeholder="Cantidad de Cuotas" class="form-control input-md" required="">
    <p class="help-block">Ingrese la cantidad de Cuotas o Pagos</p>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="monto">Monto</label>  
  <div class="col-md-4">
  <input id="monto" name="monto" type="text" placeholder="$" class="form-control input-md" required="">
  <span class="help-block">Monto de las cuota o del Pago</span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="save"></label>
  <div class="col-md-4">
    <button id="save" name="save" class="btn btn-primary">Guardar</button>
  </div>
</div>

</fieldset>
<?php echo Form::close(); ?><!-- Fin de Formulario -->