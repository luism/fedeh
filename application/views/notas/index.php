<div class="row">
<h2 class="">Listado de Notas</h2> 
<div>    
<a href="<?php echo URL::base('http') ?>notas/new"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
</div> 
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Notas</div>

  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Motivo</th>
        <th>Fecha</th>
        <th>Dirigida a</th>
        <th>Expte. generado</th>
        <th>Entidad expte.</th>
        <th>Fecha expte.</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($collection as $nota) { ?>
      <tr>
        <td><?php echo $nota->id ?></td>
        <td><?php echo $nota->motivo ?></td>
        <td><?php echo $nota->fecha_nota ?></td>
        <td><?php echo $nota->dirigida_a ?></td>
        <td><?php echo $nota->expte_generado ?></td>
        <td><?php echo $nota->entidad_expte ?></td>
        <td><?php echo $nota->fecha_expte ?></td>
        <td>
          <a href="<?php echo URL::base('http') . 'notas/edit/'. $nota->id ?>" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<?php echo URL::base('http') . 'notas/delete/'. $nota->id ?>" class="btn" onclick="return confirm('¿Está seguro que desea eliminar el registro?');"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>