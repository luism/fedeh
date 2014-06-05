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
<legend>Ver Balance</legend>
<!-- 
 Text input
<div class="form-group">
  <label class="col-md-4 control-label" for="person">Fecha Inicio</label>  
  <div class="col-md-4">
  <input id="fecha_inicio" name="fecha_inicio" type="text" placeholder="Inicio" class="form-control input-md" required="">
  <span class="help-block">Fecha inicial</span>  
  </div>
</div>

 Text input
<div class="form-group">
  <label class="col-md-4 control-label" for="monto">Fecha Final</label>  
  <div class="col-md-4">
  <input id="fecha_fin" name="fecha_fin" type="text" placeholder="Fin" class="form-control input-md" required="">
  <span class="help-block">Fecha Final</span>  
  </div>
</div>

Button
<div class="form-group">
  <label class="col-md-4 control-label" for="save"></label>
  <div class="col-md-4">
    <button id="save" name="save" class="btn btn-primary">Ver</button>
  </div>
</div> -->

</fieldset>
<?php echo Form::close(); ?><!-- Fin de Formulario -->
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Socios:</h3>
          </div>
          <div class="panel-body">
            <p>Debe: $ <?php echo isset($socio_debe_total) ? $socio_debe_total * -1 : '0' ?></p>
            <p>Haber: $ <?php echo isset($socio_haber_total) ? $socio_haber_total : '0' ?></p>
            <p>Saldo: $ <?php echo isset($socio_total) ? $socio_total : '0' ?></p>
          </div>
          <div class="panel-footer"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Judiciales:</h3>
          </div>
          <div class="panel-body">
            <p>Debe: $ <?php echo isset($judicial_debe_total) ? $judicial_debe_total * -1 : '0' ?></p>
            <p>Haber: $ <?php echo isset($judicial_haber_total) ? $judicial_haber_total : '0' ?></p>
            <p>Saldo: $ <?php echo isset($judicial_total) ? $judicial_total : 0 - (isset($judicial_debe_total) ? $judicial_debe_total * -1 : '0') ?></p>
          </div>
          <div class="panel-footer"></div>
        </div>
    </div>
<!--     <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading"><h3 class="panel-title">Eventos:</h3></div>
          <div class="panel-body">
            <div id="ejemplo3"></div>
          </div>
          <div class="panel-footer"></div>
        </div>
    </div> -->
</div>