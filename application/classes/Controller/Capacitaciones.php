<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Capacitaciones extends Controller_Template_Base
{

  
  public function action_index()
  {

    // Listamos
   
    $capacitaciones = ORM::factory('Capacitacion');
    $collection = $capacitaciones->find_all();
    $this->template->content = View::factory('capacitaciones/index')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Capacitaciones</li>
    </ol>";
  }

  public function action_new()
  {
  
    if (isset($_POST) && Valid::not_empty($_POST)) {

      // Factory es un patron de diseño, tener en cuenta.
      $post = Validation::factory($_POST)
              ->rule('titulo','not_empty')
              ->rule('descripcion','not_empty')
              ->rule('cupos','not_empty')
              ->rule('fecha_capacitacion','not_empty')
              ->rule('hora','not_empty')
              ->rule('lugar','not_empty');
              
      if ($post->check()) {
        // Instanciamos una capacitacion
        $capacitacion = ORM::factory('Capacitacion');
        // Agregamos los datos al modelo instanciado
        $capacitacion->values(array(
            'titulo' => $post['titulo'],
            'descripcion' => $post['descripcion'],
            'cupos' => $post['cupos'],
            'fecha_capacitacion' => $post['fecha_capacitacion'],
            'hora' => $post['hora'],
            'ingresos' => $post['ingresos'],
            'lugar' => $post['lugar'],
                      
          )
        );


        try{
          $capacitacion->save();
          // ver a donde redireccionamos
          $this->redirect('capacitaciones/index');
        }
        catch (ORM_Validation_Exception $e){
          $errors = $e->errors('capacitacion');
        }
      }
    }

    // redireccionar al fomrulario si da error
    //$session->set('nota',$nota);
    //$session->set('errors',$errors);
    //$this->redirect('notas/new');
    $this->template->content = View::factory('capacitaciones/new')
         ->bind('post', $post)
         ->bind('errors', $errors);
  }

  public function update()
  {
    // Actualizamos el rol
  }

  public function delete()
  {
    // Borramos el rol
  }
}