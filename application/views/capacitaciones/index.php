<div class="row">
<h2 class="">Listado de Capacitaciones</h2>  
<div>    
<a href="<?php echo URL::base('http') ?>capacitaciones/new"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
</div>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Capacitaciones</div>

  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Cupos</th>
        <th>Fecha de capacitacion</th>
        <th>Hora</th>
        <th>Lugar</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($collection as $capacitacion) { ?>
      <tr>
        <td><?php echo $capacitacion->id ?></td>
        <td><?php echo $capacitacion->titulo ?></td>
        <td><?php echo $capacitacion->descripcion ?></td>
        <td><?php echo $capacitacion->cupos ?></td>
        <td><?php echo $capacitacion->fecha_capacitacion ?></td>
        <td><?php echo $capacitacion->hora ?></td>
        <td><?php echo $capacitacion->lugar ?></td>
        <td>
          <a href="<? echo URL::base('http') . 'capacitaciones/edit/' . $capacitacion->id ?>" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<? echo URL::base('http') . 'capacitaciones/delete/'. $capacitacion->id ?>" class="btn" onclick="return confirm('¿Está seguro que desea eliminar el registro?');"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>