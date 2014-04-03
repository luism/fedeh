<div class="row">
<h2 class="">Listado de Pacientes</h2>  
<div>    
<a href="<?php echo URL::base('http') ?>pacientes/new"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
<a href="<?php echo URL::base('http') ?>pacientes/consulta"><i class="glyphicon glyphicon-search"></i>Consulta</a>
</div>

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
          <a href="<? echo URL::base('http') . 'pacientes/edit/'. $paciente->id ?>" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<? echo URL::base('http') . 'pacientes/delete/'. $paciente->id ?>" class="btn" onclick="return confirm('¿Está seguro que desea eliminar el registro?');"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>