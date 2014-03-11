<div class="row">
<h2 class="">Listado de Colaboradores</h2>  
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Colaboradores</div>

  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Domicilio</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Nro Documento</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($collection as $colaborador) { ?>
      <tr>
        <td><?php echo $colaborador->id ?></td>
        <td><?php echo $colaborador->nombre ?></td>
        <td><?php echo $colaborador->apellido ?></td>
        <td><?php echo $colaborador->domicilio_personal ?></td>
        <td><?php echo $colaborador->Telefono ?></td>
        <td><?php echo $colaborador->email ?></td>
        <td><?php echo $colaborador->colaborador->nro_documento ?></td>
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