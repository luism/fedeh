

<h3>Nombre y Apellido: <?php echo $persona->nombre ?> <?php echo $persona->apellido ?>
</h3>

<p>Numero de Ficha: <?php echo $socio->numero_ficha ?></p>

<p>
  Se genero la Cuenta:
  <?php $socio->persona->tiene_cuenta() ? 'si' : 'no <a href="#">Generar Cuenta</a>' ?>
</p>
<p>Plan de cuenta: <?php echo $plan_de_cuenta->id ?></p>

<table>
  <tr>
    <th>Cuota</th>
    <th>Monto</th>
    <th>Detalle</th>
    <th>Fecha Vto</th>
  </tr>
<?php foreach ($lineas_cuentas_corrientes as $i => $linea){ ?>
  <tr>
    <td><?php echo $i +1 ?></td>
    <td><?php echo $linea->debe ?></td>
    <td><?php echo $linea->detalle ?></td>
    <td><?php echo Helper_Date::format($linea->fecha_cta_cte) ?></td>
  </tr>
<?php } ?>
</table>