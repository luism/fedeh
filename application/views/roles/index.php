<div class="row">
<h2 class="">Listado de Roles</h2>  
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Rol</div>

  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($collection as $rol) { ?>
      <? if ($rol->id > 3) { ?>
      <tr>
        <td><?php echo $rol->id ?></td>
        <td><?php echo $rol->name ?></td>
        <td><?php echo $rol->description ?></td>
        <td>
          <a href="#" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="#" class="btn"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>
      <?php }?>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>