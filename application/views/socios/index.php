<div class="row">
<h2 class="">Listado de Socios</h2>  
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Socios</div>

  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($collection as $socio) { ?>
      <tr>
        <td><?php echo $socio->id ?></td>
        <td><?php echo $socio->persona->nombre ?></td>
        <td><?php echo $socio->persona->apellido ?></td>
        <td>
          <td>
          <a href="#" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="#" class="btn"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
          <a href="#" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<? echo URL::base('http') . 'socios/delete/'. $socio->id ?>" class="btn"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>