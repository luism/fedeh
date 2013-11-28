<div class="row">
<h2 class="">Listado de Usuarios</h2>  
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Usuarios</div>

  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre de usuario</th>
        <th>correo electrónico</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($collection as $usuario) { ?>
      <tr>
        <td><?php echo $usuario->id ?></td>
        <td><?php echo $usuario->username ?></td>
        <td><?php echo $usuario->email ?></td>
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