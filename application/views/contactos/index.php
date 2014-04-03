<div class="row">
<h2 class="">Listado de Contactos</h2> 
<div>    
<a href="<?php echo URL::base('http') ?>contactos/new"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
<a href="<?php echo URL::base('http') ?>contactos/consulta"><i class="glyphicon glyphicon-search"></i>Consulta</a>
</div> 
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Contactos</div>

  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>EMail</th>
        <th>Telefono</th>
        <th>Profesion</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($collection as $contacto) { ?>
      <tr>
        <td><?php echo $contacto->id ?></td>
        <td><?php echo $contacto->nombre ?></td>
        <td><?php echo $contacto->apellido ?></td>
        <td><?php echo $contacto->email ?></td>
        <td><?php echo $contacto->telefono ?></td>
        <td><?php echo $contacto->contacto->profesion ?></td>
        <td>
          <a href="<? echo URL::base('http') . 'contactos/edit/'. $contacto->id ?>" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<? echo URL::base('http') . 'contactos/delete/'. $contacto->id ?>" class="btn" onclick="return confirm('¿Está seguro que desea eliminar el registro?');"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>