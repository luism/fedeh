<div class="row">
<h2 class="">Fichas disponibles</h2>  
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Fichas</div>

  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Numero de ficha</th>
        <th>Ultimo asociado</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($collection as $ficha) { ?>
      <tr>
        <td><?php echo $ficha->id ?></td>
        <td><?php echo $ficha->numero_ficha ?></td>
        <td><?php echo $historial->socio->persona->apellido , $historial->socio->persona->nombre ?></td>
        <!--<td>
          <a href="<? //echo URL::base('http') . 'socios/edit/'. $socio->id ?>" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<? //echo URL::base('http') . 'socios/delete/'. $socio->id ?>" class="btn"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>-->
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>