<div class="row">
<h2 class="">Consulta de Contacto</h2>  
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Apellido
  <form class="form-search">
    <input type="text" class="input-medium search-query">
    <button type="submit" class="btn">Consultar</button>
    <!--<?php //echo Form::input('apellido', $post['apellido'], array('class' => 'form-control', 'placeholder' => 'Apellido', 'autofocus', 'required' => '')) ?>-->
  </form>
  Nombre
  <form class="form-search">
    <input type="text" class="input-medium search-query">
    <button type="submit" class="btn">Consultar</button>
    <!--<?php //echo Form::input('nombre', $post['nombre'], array('class' => 'form-control', 'placeholder' => 'Nombre', 'autofocus', 'required' => '')) ?>-->
  </form>
</div>

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
          <a href="#" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<? echo URL::base('http') . 'contactos/delete/'. $contacto->id ?>" class="btn"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>