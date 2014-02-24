<div class="row">
<h2 class="">Listado de Contactos</h2>  
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Contactos</div>

  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>EMail</th>
        <th>Telefono</th>
        <th>Profesion</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($collection as $contacto) { ?>
      <tr>
        <td><?php echo $contacto->id ?></td>
        <td><?php echo $contacto->nombre ?></td>
        <td><?php echo $contacto->apellido ?></td>
        <td><?php echo $contacto->email ?></td>
        <td><?php echo $contacto->telefono ?></td>
        <td><?php echo $contacto->contacto->profesion ?></td>
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