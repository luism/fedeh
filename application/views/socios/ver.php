<p>Nombre y Apellido</p>
<?php echo $socio->persona->nombre ?> <?php echo $socio->persona->apellido ?>

<p>Numero de Ficha</p>
<?php echo $socio->numero_ficha ?>
<p>
  
Se genero la Cuenta:
<?php if ($socio->persona->tiene_cuenta()): ?>
si
<?php else: ?>
no
<a href="#">Generar Cuenta</a>
<?php endif; ?>
</p>
