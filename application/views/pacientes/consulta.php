
 <div class="row">

<h2 class="">Consulta de Paciente</h2> 

<div class="panel panel-default">
  <!-- Default panel contents -->
  <?php echo Form::open(NULL, array('role' => 'form', 'class' => 'form')); ?>
    <div class="panel-heading">
    Apellido
      <?php echo Form::input('apellido', $apellido, array('class' => 'input-medium search-query', 'placeholder' => '', 'autofocus')) ?>
       
    Nombre
      <?php echo Form::input('name', $name, array('class' => 'input-medium search-query', 'placeholder' => '', 'autofocus')) ?>
    
    <?php echo Form::submit('save', 'Consultar', array('last_name' => 'save', 'class' => 'btn btn-primary')); ?>
    </div>
  <?php echo Form::close(); ?><!-- Fin de Formulario -->
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
        <td><?php echo $paciente->apellido ?></td>
        <td><?php echo $paciente->grupo_sanguineo ?></td>
        <td><?php echo $paciente->estado ?></td>
        <td>
          <a href="<?php echo URL::base('http') . 'pacientes/edit/'. $paciente->id ?>" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<?php echo URL::base('http') . 'pacientes/delete/'. $paciente->id ?>" class="btn" onclick="return confirm('¿Está seguro que desea eliminar el registro?');"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>