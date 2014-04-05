<div class="row">
<h2 class="">Socios con descuentos por planilla</h2>  
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Socios</div>

  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Tipo de Aporte</th>
        <th>Numero de ficha</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($collection as $socio) { ?>
      <tr>
        <td><?php echo $socio->id ?></td>
        <td><?php echo $socio->persona->nombre ?></td>
        <td><?php echo $socio->persona->apellido ?></td>
        <td><?php echo $socio->tipo_aporte ?></td>
        <td><?php echo $socio->fichas->numero_ficha ?></td>
        <td>
          <a href="<?php echo URL::base('http') . 'socios/edit/'. $socio->id ?>" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<?php echo URL::base('http') . 'socios/delete/'. $socio->id ?>" class="btn"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>