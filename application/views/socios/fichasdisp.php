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
        <th>Historial</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($collection as $ficha) { ?>
      <tr>
        <td><?php echo $ficha->id ?></td>
        <td><?php echo $ficha->numero_ficha ?></td>
        <td><?php //echo $ficha->ultimo_asociado()->persona->nombre ?></td>
        <td>
          <a href="<?php echo URL::base('http') . 'fichas/historial/'. $ficha->id ?>" class="btn"><i class="glyphicon glyphicon-glyphicon-eye-open"></i> <strong>Ver</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>