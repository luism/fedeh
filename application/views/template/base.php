<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Fundación FEDEH</title>

    <!-- Bootstrap core CSS -->
    <!-- Custom styles for this template -->
    <!-- Agregado para menues de mas de un nivel -->
    <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), PHP_EOL ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <?php echo $menu; ?>

    <?php //echo $breadcrumb; ?>

    <div class="container">

      <?php echo $content; ?>

    </div> <!-- /container -->
    
    <?php echo $footer; ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
    <!-- <?php echo View::factory('profiler/stats') ?> -->
  </body>
</html>
