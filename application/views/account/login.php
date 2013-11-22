  <div class="row">
    <?php if ($errors || $loginerrors) { ?>
      <!-- Mensajes de error -->
      <div class="alert-danger alert alert-dismissable">
        <strong>Hubo un error</strong>
        <p class="message">Se encontraron algunos errores, por favor verifique los datos ingresados.</p>
        <p>
        <ul class="errors">
        <?php foreach ($errors as $message): ?>
            <li><?php echo $message ?></li>
        <?php endforeach ?>
        <?php if(isset($loginerrors) && empty($errors)) { echo $loginerrors; } ?>
        </ul>
        </p>
      </div>
    <?php } ?>    
  </div>
  
  <?php echo Form::open(NULL, array('class' => 'form-signin')); ?>

    <h2 class="form-signin-heading">Acceso</h2>
    <?php echo Form::input('username', $post['username'], array('class' => 'form-control', 'placeholder' => 'Usuario', 'autofocus')) ?>
    <?php echo Form::password('password',NULL,array('class' => 'form-control', 'placeholder' => 'Contraseña')) ?>
    <label class="checkbox">
      <?php echo Form::checkbox('remember-me', 'remember-me', ! empty($post['remember'])) ?>  Recordarme
    </label>
    <?php echo Form::submit(NULL, 'Ingresar', array('class' => 'btn btn-lg btn-primary btn-block')); ?>

  <?php echo Form::close(); ?>
