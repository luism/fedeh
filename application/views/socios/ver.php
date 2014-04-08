<p>Nombre y Apellido</p>
<h3>
  <?php echo $persona->nombre ?> <?php echo $persona->apellido ?>
</h3>

<p>Numero de Ficha: <?php echo $socio->numero_ficha ?></p>

<p>  
  Se genero la Cuenta:
  <?php $socio->persona->tiene_cuenta() ? 'si' : 'no <a href="#">Generar Cuenta</a>' ?>
</p> 
<p>Plan de cuenta: <?php echo $plan_de_cuenta->id ?></p>

<?php foreach ($lineas_cuentas_corrientes as $linea){ ?>
  <p>Debe: <?php echo $linea->debe ?></p>
  <p>Detalle: <?php echo $linea->detalle ?></p>
<?php } ?>