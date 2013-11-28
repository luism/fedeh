<?php echo Form::open(NULL, array('role' => 'form', 'class' => 'form-horizontal')); ?>
  <fieldset>

    <!-- Form Name -->
    <legend>Nuevo</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-3 control-label" for="username">Nombre de Usuario</label>  
      <div class="col-md-5">
        <?php echo Form::input('username', $post['username'], array('class' => 'form-control input-md', 'placeholder' => 'Usuario', 'autofocus', 'required' => '')) ?>
      <span class="help-block">Solo debe contener letras y numero</span>  
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-3 control-label" for="email">Correo Electrónico</label>  
      <div class="col-md-5">
        <?php echo Form::input('email', $post['email'], array('class' => 'form-control input-md', 'placeholder' => 'E-Mail', 'autofocus', 'required' => '')) ?>
      <span class="help-block"></span>  
      </div>
    </div>

    <!-- Password input-->
    <div class="form-group">
      <label class="col-md-3 control-label" for="password">Contraseña</label>
      <div class="col-md-5">
        <?php echo Form::password('password',NULL,array('class' => 'form-control input-md', 'placeholder' => 'Contraseña', 'required' => '')) ?>
        <span class="help-block">Alfanumérico</span>
      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-3 control-label" for="role">Rol</label>
      <div class="col-md-5">
        <select id="role" name="role" class="form-control">
          <option value="1">Option one</option>
          <option value="2">Option two</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-3 control-label" for="button1id"></label>
      <div class="col-md-8">
        <?php echo Form::submit('save', 'Guardar', array('id' => 'save', 'class' => 'btn btn-primary')); ?>
        <?php echo Form::button('cancel', 'Cancelar', array('id' => 'cancel', 'class' => 'btn btn-danger')); ?>
      </div>
    </div>

  </fieldset>
<?php echo Form::close(); ?>