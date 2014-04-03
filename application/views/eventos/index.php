<div class="row">
<h2 class="">Listado de Eventos</h2>
<div>    
<a href="<?php echo URL::base('http') ?>eventos/new"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
</div>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Eventos</div>

  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Lugar</th>
        <th>Descripcion</th>
        <th>Ingresos</th>
        <!--<th>Gastos total</th>-->
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($collection as $evento) { ?>
      <tr>
        <td><?php echo $evento->id ?></td>
        <td><?php echo $evento->nombre ?></td>
        <td><?php echo $evento->fecha ?></td>
        <td><?php echo $evento->hora ?></td>
        <td><?php echo $evento->lugar ?></td>
        <td><?php echo $evento->descripcion ?></td>
        <td><?php echo $evento->ingresos ?></td>
        <!--<td><?php //echo $evento->gasto_total ?></td>-->
        <td>
          <a href="<? echo URL::base('http') . 'eventos/edit/'. $evento->id ?>" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<? echo URL::base('http') . 'eventos/delete/'. $evento->id ?>" class="btn" onclick="return confirm('¿Está seguro que desea eliminar el registro?');"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>