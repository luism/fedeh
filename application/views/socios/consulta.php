<div class="row">
<h2 class="">Consulta de Socio</h2>  
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
  <?php echo Form::input('nombrebusq', $post['nombrebusq'], array('class' => 'form-control', 'placeholder' => 'Nombre', 'autofocus', 'required' => '')) ?>
</form>
N° de ficha
<form class="form-search">
  <input type="text" class="input-medium search-query">
  <button type="submit" class="btn">Consultar</button>
  <!--<?php //echo Form::input('nombre', $post['nombre'], array('class' => 'form-control', 'placeholder' => 'Nombre', 'autofocus', 'required' => '')) ?>-->
</form>

  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <!--<?php //foreach ($collection as $socio) { ?>-->
      <tr>
        <td><?php echo $socio->id ?></td>
        <td><?php echo $socio->persona->nombre ?></td>
        <td><?php echo $socio->persona->apellido ?></td>
        <td>
          <a href="<? echo URL::base('http') . 'socios/edit/'. $socio->id ?>" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<? echo URL::base('http') . 'socios/delete/'. $socio->id ?>" class="btn"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <!--<?php //}?>-->
    </tbody>
  </table>
</div>
</div>