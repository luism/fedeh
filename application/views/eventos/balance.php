<div class="row">

<h2 class="">Ver balance de evento</h2> 

<div class="panel panel-default">
  <!-- Default panel contents -->
  <?php echo Form::open(NULL, array('role' => 'form', 'class' => 'form')); ?>
    <div class="panel-heading">
    Nombre evento
    <?php echo Form::input('name', $name, array('class' => 'input-medium search-query', 'placeholder' => '', 'autofocus')) ?>
    <?php echo Form::submit('save', 'Ver balance', array('last_name' => 'save', 'class' => 'btn btn-primary')); ?>
    </div>
  <?php echo Form::close(); ?><!-- Fin de Formulario -->
</div>
  
  <!-- Table -->
  <?php if ($name != NULL) { ?>
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Lugar</th>
        <th>Descripcion</th>
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
        <td>
    </table>
      <table class="table">
        <thead>
            <tr>
            <th>Ingresos</th>
            <th>Gastos de decoracion</th>
            <th>Gastos de imprenta</th>
            <th>Gastos de movilidad</th>
            <th>Gastos de permisos</th>
            <th>Gastos de servicios</th>
            <th>Gastos de tecnica</th>
            <th>Gastos varios</th>
            <th>Gasto total</th>
            <th>Balance</th>
            </tr>
        </thead>
        <tbody>
        <?php }?>
      <?php foreach ($collection as $evento) { ?>
      <tr>
        <td><?php echo $evento->ingresos ?></td>
        <td><?php echo $evento->gastos_decoracion ?></td>
        <td><?php echo $evento->gastos_imprenta ?></td>
        <td><?php echo $evento->gastos_movilidad ?></td>
        <td><?php echo $evento->gastos_permisos ?></td>
        <td><?php echo $evento->gastos_servicios ?></td>
        <td><?php echo $evento->gastos_tecnica ?></td>
        <td><?php echo $evento->gastos_varios ?></td>
        <td><?php echo $evento->gastos_varios+$evento->gastos_decoracion+$evento->gastos_imprenta+$evento->gastos_movilidad+$evento->gastos_permisos+$evento->gastos_servicios+$evento->gastos_tecnica ?></td>
        <td><strong><?php echo $evento->ingresos-($evento->gastos_varios+$evento->gastos_decoracion+$evento->gastos_imprenta+$evento->gastos_movilidad+$evento->gastos_permisos+$evento->gastos_servicios+$evento->gastos_tecnica) ?></strong></td>
      </tr>  
                 
      <?php }?>
    </tbody>
  </table>
  <?php } else {?>
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
        </tr>      
      <?php }?>
    </tbody>
  </table>
  <?php }?>
  <a href="<?php echo URL::base('http') . 'eventos/edit/'. $evento->id ?>" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
  <a href="<?php echo URL::base('http') . 'eventos/delete/'. $evento->id ?>" class="btn" onclick="return confirm('¿Está seguro que desea eliminar el registro?');"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
</div>
</div>