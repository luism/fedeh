<div class="row">
  <h2>Socio</h2>
<div>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
    <h3 class="panel-title">Detalle Cuenta: <?php echo $persona->nombre ?> <?php echo $persona->apellido ?></h3>
  </div>
  <div class="panel-body">
    <p>Numero de Ficha: <?php echo $socio->numero_ficha ?></p>
    <!-- <p>Se genero la Cuenta: <?php echo $persona->tiene_cuenta() ? 'Si' : 'No <a href="#">Generar Cuenta</a>' ?></p> -->
    <p>Plan de cuenta: <?php echo $plan_de_cuenta->id ?></p>
    <p>Domicilio: <?php echo $persona->domicilio_personal ?></p>
    <p>Domicilio Laboral: <?php echo $socio->domicilio_laboral ?></p>
    <p>Telefono: <?php echo $persona->telefono ?></p>
    <p>E-Mail: <?php echo $persona->email ?></p>
    <p>Documento:</p>
    <p>Fecha de Nacimiento: <?php echo Helper_Date::format($socio->fecha_nacimiento, Helper_Date::DATE_ES); ?></p>
    <p>Descuento por Planilla: <?php echo $socio->descuento_planilla ?></p>
    <p>Grupo sanguíneo: <?php echo $socio->numero_ficha ?></p>
  </div>
  <!-- Table -->
    <table class="table table-striped">
      <tr>
        <th>Item</th>
        <th>Monto</th>
        <th>Pagado</th>
        <th>Detalle</th>
        <th>Fecha</th>
      </tr>
      <?php foreach ($lineas_cuentas_corrientes as $i => $linea){ ?>
      <tr>
        <td><?php echo $i +1 ?></td>
        <td><?php echo isset($linea->debe) ? '$ '.number_format($linea->debe * -1,2,',','.') : '-'; ?></td>
        <td><?php echo isset($linea->haber) ? '$ '.number_format($linea->haber,2,',','.') : '-'; ?></td>
        <td><?php echo $linea->detalle ?></td>
        <td><?php echo Helper_Date::format($linea->fecha_cta_cte) ?></td>
      </tr>
      <?php } ?>
    </table>
  </div>
</div>