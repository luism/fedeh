<div class="row">
<h2 class="">Consulta de Contacto</h2>  

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
        <th>EMail</th>
        <th>Telefono</th>
        <th>Profesion</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php if($collection == NULL){?> 
      <div class="alert-danger alert alert-dismissable">
      <strong>No existe ese contacto</strong>    
      </div>
      <?php } else {?> 
      <?php foreach ($collection as $contacto) { ?>
      <tr>
        <td><?php echo $contacto->id ?></td>
        <td><?php echo $contacto->persona->nombre ?></td>
        <td><?php echo $contacto->persona->apellido ?></td>
        <td><?php echo $contacto->persona->email ?></td>
        <td><?php echo $contacto->persona->telefono ?></td>
        <td><?php echo $contacto->profesion ?></td>
        <td>
          <a href="<?php echo URL::base('http') . 'contactos/edit/'. $contacto->id ?>" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<?php echo URL::base('http') . 'contactos/delete/'. $contacto->id ?>" class="btn" onclick="return confirm('¿Está seguro que desea eliminar el registro?');"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php } } ?>
    </tbody>
  </table>
</div>
</div>