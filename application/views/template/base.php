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
    <?php echo HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js')?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <?php Helper_Fichas::fichas_disponibles_popup() ?>

    <?php echo $menu ?>

    <?php echo isset($breadcrumb) ? $breadcrumb : '' ?>

    <div class="container">

      <?php echo $content ?>

    </div> <!-- /container -->
    <?php echo $footer ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
    <?php echo isset($_GET['profiler']) ? View::factory('profiler/stats') : '' ?>
  </body>
</html>
