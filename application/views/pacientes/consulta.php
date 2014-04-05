
 <div class="row">

<h2 class="">Consulta de Paciente</h2> 

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Apellido
<form class="form-search">
  <input type="text" class="input-medium search-query">
  <button type="submit" class="btn btn-primary">Consultar</button>
  <!--<?php //echo Form::input('apellido', $paciente->apellido, array('class' => 'form-control', 'placeholder' => 'Apellido', 'autofocus', 'required' => '')) ?>-->
</form>
Nombre
<form class="form-search">
  <input type="text" class="input-medium search-query">
  <button type="submit" class="btn btn-primary">Consultar</button>
  <!--<?php //echo Form::input('nombre', $post['nombre'], array('class' => 'form-control', 'placeholder' => 'Nombre', 'autofocus', 'required' => '')) ?>-->
</form>

  </div>

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
          <a href="#" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<?php echo URL::base('http') . 'pacientes/delete/'. $paciente->id ?>" class="btn"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>