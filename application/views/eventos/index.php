<div class="row">
<h2 class="">Listado de Eventos</h2>  
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Eventos</div>

  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Lugar</th>
        <th>Descripcion</th>
        <th>Ingresos</th>
        <th>Gastos total</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($collection as $evento) { ?>
      <tr>
        <td><?php echo $evento->id ?></td>
        <td><?php echo $evento->nombre ?></td>
        <td><?php echo $evento->fecha_ ?></td>
        <td><?php echo $evento->hora ?></td>
        <td><?php echo $evento->lugar ?></td>
        <td><?php echo $evento->Descripcion ?></td>
        <td><?php echo $evento->Ingresos ?></td>
        <!--<td><?php echo $evento->gasto_total ?></td>-->
        <td>
          <a href="#" class="btn"><i class="icon-edit"></i> <strong>Editar</strong></a>
          <a href="#" class="btn"><i class="icon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>