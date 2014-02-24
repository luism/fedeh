<div class="row">
<h2 class="">Listado de Pacientes</h2>  
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Pacientes</div>

  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Grupo sanguineo</th>
        <th>Estado</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($collection as $paciente) { ?>
      <tr>
        <td><?php echo $paciente->id ?></td>
        <td><?php echo $paciente->nombre ?></td>
        <td><?php echo $paciente->grupo_sanguineo ?></td>
        <td><?php echo $paciente->paciente->estado ?></td>
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