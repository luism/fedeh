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
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($historial as $item) { ?>
      <tr>
        <td><?php echo $item->socio->persona->nombre ?></td>
        <td><?php echo $item->accion ?></td>
        <td><?php echo $item->fecha ?></td>
        <td>
          <a href="#" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="#" class="btn"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>