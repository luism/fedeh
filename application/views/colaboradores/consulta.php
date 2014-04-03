<div class="row">
<h2 class="">Consulta de Colaborador</h2>  
<div class="panel panel-default">
  <!-- Default panel contents -->
<div class="panel-heading">Apellido
<form class="form-search">
  <input type="text" class="input-medium search-query">
  <button type="submit" class="btn btn-primary">Consultar</button>
  <!--<?php //echo Form::input('apellido', $post['apellido'], array('class' => 'form-control', 'placeholder' => 'Apellido', 'autofocus', 'required' => '')) ?>-->
</form>
Nombre
<form class="form-search">
  <input type="text" class="input-medium search-query">
  <button type="submit" class="btn btn-primary">Consultar</button>
  <!--<?php //echo Form::input('nombre', $post['nombre'], array('class' => 'form-control', 'placeholder' => 'Nombre', 'autofocus', 'required' => '')) ?>-->
</form>
D.N.I.
<form class="form-search">
  <input type="text" class="input-medium search-query">
  <button type="submit" class="btn btn-primary">Consultar</button>
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
          <a href="#" class="btn"><i class="glyphicon glyphicon-edit"></i> <strong>Editar</strong></a>
          <a href="<? echo URL::base('http') . 'colaboradores/delete/'. $colaborador->id ?>" class="btn"><i class="glyphicon glyphicon-trash"></i> <strong>Borrar</strong></a>
        </td>
      </tr>      
      <?php }?>
    </tbody>
  </table>
</div>
</div>