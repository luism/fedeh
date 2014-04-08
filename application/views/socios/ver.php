<?php 

?>


<p>Nombre y Apellido</p>
<?php echo $persona->nombre ?> <?php echo $persona->apellido ?>

<p>
  Numero de Ficha: <?php echo $socio->numero_ficha ?>
</p>

<p>  
  Se genero la Cuenta:
  <?php if ($socio->persona->tiene_cuenta()): ?>si<?php else: ?>no <a href="#">Generar Cuenta</a><?php endif; ?>
</p> 
<p>Plan de cuenta: <?php echo $plan_de_cuenta->id ?></p>

<?php foreach ($lineas_cuentas_corrientes as $linea){ ?>
  <p>Debe: <?php echo $linea->debe ?></p>
  <p>Detalle: <?php echo $linea->detalle ?></p>

<?php } ?>