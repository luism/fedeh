<div class="row">
<h2 class="">Listado de Socios</h2>  
<div>    
<a href="<?php echo URL::base('http') ?>socios/new"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
<a href="<?php echo URL::base('http') ?>socios/consulta"><i class="glyphicon glyphicon-search"></i>Consulta</a>
</div>
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
        <th>N° Ficha</th>
        <th>Documento</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($collection as $socio) { ?>
      <tr>
        <td><?php echo $socio->id ?></td>
        <td><?php echo $socio->persona->nombre ?></td>
        <td><?php echo $socio->persona->apellido ?></td>
        <td><?php echo $socio->numero_ficha ?></td>
        <td><?php echo $socio->tipo_documento ?> <?php echo $socio->nro_documento ?></td>
        <td>
          <a href="<? echo URL::base('http') . 'socios/ver/'. $socio->id ?>" class="btn"><i class="glyphicon glyphicon-eye-open"></i> <strong>Ver</strong></a>
          <a href="<? echo URL::base('http') . 'socios/edit/'. $socio->id ?>" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<? echo URL::base('http') . 'socios/delete/'. $socio->id ?>" class="btn" onclick="return confirm('¿Está seguro que desea eliminar el registro?');"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>