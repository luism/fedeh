<div class="row">
<h2 class="">Listado de Colaboradores</h2>  
<div>    
<a href="<?php echo URL::base('http') ?>colaboradores/new"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
<a href="<?php echo URL::base('http') ?>colaboradores/consulta"><i class="glyphicon glyphicon-search"></i>Consulta</a>
</div>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Colaboradores</div>

  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Domicilio</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Nro Documento</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($collection as $colaborador) { ?>
      <tr>
        <td><?php echo $colaborador->id ?></td>
        <td><?php echo $colaborador->nombre ?></td>
        <td><?php echo $colaborador->apellido ?></td>
        <td><?php echo $colaborador->domicilio_personal ?></td>
        <td><?php echo $colaborador->telefono ?></td>
        <td><?php echo $colaborador->email ?></td>
        <td><?php echo $colaborador->colaborador->nro_documento ?></td>
        <td>
          <a href="<? echo URL::base('http') . 'colaboradores/edit/'. $colaborador->id ?>" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<? echo URL::base('http') . 'colaboradores/delete/'. $colaborador->id ?>" class="btn" onclick="return confirm('¿Está seguro que desea eliminar el registro?');"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>