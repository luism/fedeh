<div class="row">
<h2 class="">Consulta de Socio</h2>  
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
        <th>N° Ficha</th>
        <th>Tipo de aporte</th>
        <th>Documento</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($collection as $socio) { ?>
      <tr>
        <td><?php echo $socio['id'] ?></td>
        <td><?php echo $socio['nombre'] ?></td>
        <td><?php echo $socio['apellido'] ?></td>
        <td><?php echo $socio['numero_ficha'] ?></td>
        <td><?php echo $socio['tipo_aporte'] ?></td>
        <td><?php echo $socio['tipo_documento'] ?> <?php echo $socio['nro_documento'] ?></td>
        <td>
          <a href="<?php echo URL::base('http') . 'socios/edit/'. $socio['id'] ?>" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<?php echo URL::base('http') . 'socios/delete/'. $socio['id'] ?>" class="btn"nclick="return confirm('¿Está seguro que desea eliminar el registro?');"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>