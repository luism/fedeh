<div class="row">
  <h2 class="">Cuentas</h2>
</div>

<!-- Form Name -->
<?php echo Form::open('cuentas/nuevo_pago', array('role' => 'form', 'class' => 'form')); ?>
  <?php echo Form::hidden('csrf', Security::token()); ?>

  <?php if (isset($errors)) { ?>
  <div class="row">
    <!-- Mensajes de error -->
    <div class="alert-danger alert alert-dismissable">
      <strong>Hubo un error</strong>
      <p class="message">Se encontraron algunos errores, por favor verifique los datos ingresados.</p>
      <p>
      <ul class="errors">
      <?php foreach ($errors as $message) ?>
          <li><?php echo $message ?></li>      
      </ul>
      </p>
    </div>
  </div>
  <?php } ?> 

  <fieldset>

    <p class="bg-info"><legend><strong>Nuevo Pago</strong></legend></p>
    <!-- Comienza fila -->
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Tipo entidad</label>
          <?php echo Form::select('tipo_id', $tipo_arr, $tipo_id, array('class'=>'chosen tipo form-control', 'onchange' => 'load_personas(this)')) ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Persona</label>
          <?php echo Form::select('persona_id', NULL, NULL, array('id' => 'persona_id', 'class'=>'chosen persona form-control',
          'disabled' => 'disabled')) ?>
        </div>
      </div>
      <script type="text/javascript">
      $(window).load(function(){
        //$('.chosen.persona').chosen({no_results_text: "No se encontro la persona"});
        load_personas = function(nodo){
          var value = $(nodo).val();
          // Using the core $.ajax() method
          $.ajax({
              // the URL for the request
              url: "<?php echo URL::base('http') ?>personas/buscar",           
              // the data to send (will be converted to a query string)
              data: {
                  entidad: value
              },           
              // whether this is a POST or GET request
              type: "GET",           
              // the type of data we expect back
              dataType : "json",           
              // code to run if the request succeeds;
              // the response is passed to the function
              success: function( json ) {
                  // $( "<h1/>" ).text( json.title ).appendTo( "body" );
                  // $( "<div class=\"content\"/>").html( json.html ).appendTo( "body" );
                  select = $('#persona_id')
                  select.html('')
                  $.each(json,function(key, value) 
                  {
                    select.append('<option value=' + key + '>' + value + '</option>');
                  });
                  select.prop('disabled',false)
              },           
              // code to run if the request fails; the raw request and
              // status codes are passed to the function
              error: function( xhr, status, errorThrown ) {
                  alert( "No se pudo cargar Personas para la entidad seleccionada.");
                  console.log( "Error: " + errorThrown );
                  console.log( "Status: " + status );
                  console.dir( xhr );
              },           
              // code to run regardless of success or failure
              complete: function( xhr, status ) {
                  console.log( "Se cargó entidad: " + value );
              }
          });
        }
      });
      </script>
    </div><!-- Fin de fila -->

    <!-- Comienza fila -->
    <div class="row">    
      <div class="col-md-12">
        <div class="form-group">
          <label for="numero_ficha">Detalle</label>
          <?php echo Form::input('detalle', $pago->detalle, array('class' => 'form-control', 'placeholder' => 'Detalle', 'autofocus', 'required' => '')) ?>
        </div>
      </div>
    </div><!-- Fin de fila -->

    <!-- Comienza fila -->
    <div class="row">    
      <div class="col-md-6">
        <div class="form-group">
          <label for="numero_ficha">Comprobante</label>
          <?php echo Form::input('numero_comprobante', $pago->numero_comprobante, array('class' => 'form-control', 'placeholder' => 'Comprobante', 'autofocus')) ?>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <label for="apellidos">Fecha Comprobante</label>
          <?php echo Form::input('fecha_comprobante', $pago->fecha_comprobante, array('class' => 'form-control', 'placeholder' => 'Fecha Comprobante', 'autofocus')) ?>
        </div>
      </div>   
      <div class="col-md-2">
        <div class="form-group">
          <!-- Haber -->
          <label for="nombre">Monto</label>
          <?php echo Form::input('haber', $pago->haber, array('class' => 'form-control', 'placeholder' => '$', 'autofocus', 'required' => '')) ?>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <label for="apellidos">Fecha</label>
          <?php echo Form::input('fecha_cta_cte', $pago->fecha_cta_cte, array('class' => 'form-control', 'placeholder' => 'Fecha', 'autofocus', 'required' => '')) ?>
        </div>
      </div>
    </div><!-- Fin de fila -->
      
    <div class="row">
      <!-- Button (Double) -->
      <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::submit('save', 'Guardar', array('id' => 'save', 'class' => 'btn btn-primary')); ?>
            <?php echo Form::button('cancel', 'Cancelar', array('id' => 'cancel', 'class' => 'btn btn-danger')); ?>
        </div>
      </div>
    </div><!-- Fin de fila -->
  </fieldset>
<?php echo Form::close(); ?><!-- Fin de Formulario -->