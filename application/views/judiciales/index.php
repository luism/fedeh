<div class="row">
<h2 class="">Listado de Judicales</h2>  
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Judiciales</div>

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
      <?php foreach ($collection as $judicial) { ?>
      <tr>
        <td><?php echo $judicial->id ?></td>
        <td><?php echo $judicial->numero_oficio ?></td>
        <td><?php echo $judicial->fecha_oficio ?></td>
        <td><?php echo $judicial->causa ?></td>
        <td><?php echo $judicial->juzgado ?></td>
        <td><?php echo $judicial->cantidad_cuotas ?></td>
        <td><?php echo $judicial->monto_cuotas ?></td>
        <td>
          <a href="#" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<? echo URL::base('http') . 'judiciales/delete/'. $judicial->id ?>" class="btn"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>