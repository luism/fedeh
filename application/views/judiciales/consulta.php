<div class="row">
<h2 class="">Consulta de Judicial</h2>  
<div class="panel panel-default">
  <!-- Default panel contents -->
  <?php echo Form::open(NULL, array('role' => 'form', 'class' => 'form')); ?>
    <div class="panel-heading">
    Apellido
      <?php echo Form::input('apellido', $apellido, array('class' => 'input-medium search-query', 'placeholder' => '', 'autofocus')) ?>
    
    Nombre
      <?php echo Form::input('name', $name, array('class' => 'input-medium search-query', 'placeholder' => '', 'autofocus')) ?>
    
    N° de oficio
      <?php echo Form::input('nro_oficio', $nro_oficio, array('class' => 'input-medium search-query', 'placeholder' => '', 'autofocus')) ?>
    
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
        <th>Numero de oficio</th>
        <th>Fecha oficio</th>
        <th>Causa</th>
        <th>juzgado</th>
        <th>Cuotas</th>
        <th>De</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php if($collection == NULL){?> 
      <div class="alert-danger alert alert-dismissable">
      <strong>No existe esa persona judicial</strong>    
      </div>
      <?php } else {?> 
      <?php foreach ($collection as $judicial) { ?>
      <tr>
        <td><?php echo $judicial['id'] ?></td>
        <td><?php echo $judicial['nombre'] ?></td>
        <td><?php echo $judicial['apellido'] ?></td>
        <td><?php echo $judicial['numero_oficio'] ?></td>
        <td><?php echo $judicial['fecha_oficio'] ?></td>
        <td><?php echo $judicial['causa'] ?></td>
        <td><?php echo $judicial['juzgado'] ?></td>
        <td><?php echo $judicial['cantidad_cuotas'] ?></td> 
        <td><?php echo $judicial['monto_cuotas'] ?></td>
        <td>
          <a href="<?php echo URL::base('http') . 'judiciales/edit/'. $judicial['id'] ?>" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<?php echo URL::base('http') . 'judiciales/delete/'. $judicial['id'] ?>" class="btn" onclick="return confirm('¿Está seguro que desea eliminar el registro?');"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php } } ?>
    </tbody>
  </table>
</div>
</div>