<div class="row">
<h2 class="">Listado de Empresas</h2>  
<div>    
<a href="<?php echo URL::base('http') ?>empresas/new"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
</div>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Empresas</div>

  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Nombre de la empresa</th>
        <th>Rubro</th>
        <th>Domicilio</th>
        <th>Telefono</th>
        <th>Email</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($collection as $empresa) { ?>
      <tr>
        <td><?php echo $empresa->id ?></td>
        <td><?php echo $empresa->persona->nombre ?></td>
        <td><?php echo $empresa->persona->apellido ?></td>
        <td><?php echo $empresa->nombre_empresa ?></td>
        <td><?php echo $empresa->rubro ?></td>
        <td><?php echo $empresa->persona->domicilio_personal ?></td>
        <td><?php echo $empresa->persona->telefono ?></td>
        <td><?php echo $empresa->persona->email ?></td>
        <td>
          <a href="<?php echo URL::base('http') . 'empresas/edit/'. $empresa->id ?>" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<?php echo URL::base('http') . 'empresas/delete/'. $empresa->id ?>" class="btn" onclick="return confirm('¿Está seguro que desea eliminar el registro?');"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>