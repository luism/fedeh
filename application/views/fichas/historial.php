<div class="row">
<h2 class="">Ver Historial de Ficha: <?php echo $ficha->numero_ficha ?></h2>  
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Historial</div>

  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>Socio</th>
        <th>Accion</th>
        <th>Fecha</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($historial as $item) { ?>
      <tr>
        <td><?php echo $item->socio->nombre_completo(TRUE) ?></td>
        <td><?php echo $item->accion ?></td>
        <td><?php echo $item->fecha ?></td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>