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
        <th>Domicilio</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Contacto en la empresa</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($collection as $empresa) { ?>
      <tr>
        <td><?php echo $empresa->id ?></td>
        <td><?php echo $empresa->nombre ?></td>
        <td><?php echo $empresa->domicilio_personal ?></td>
        <td><?php echo $empresa->telefono ?></td>
        <td><?php echo $empresa->email ?></td>
        <td><?php echo $empresa->empresa->contacto_empresa ?></td>
        <td>
          <a href="<? echo URL::base('http') . 'empresas/edit/'. $empresa->id ?>" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<? echo URL::base('http') . 'empresas/delete/'. $empresa->id ?>" class="btn" onclick="return confirm('¿Está seguro que desea eliminar el registro?');"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>