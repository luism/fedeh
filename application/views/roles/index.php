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
      <tr>
        <td><?php echo $rol->id ?></td>
        <td><?php echo $rol->username ?></td>
        <td><?php echo $rol->email ?></td>
        <td>
          <a href="#">Editar</a>
          <a href="#">Borrar</a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>