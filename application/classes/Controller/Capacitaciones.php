<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Capacitaciones extends Controller_Template_Base
{
public function before(){
    parent::before();
    // Fix manual para fechas:
      if(isset($_POST['fecha_capacitacion']))
      {
        $_POST['fecha_capacitacion'] = Helper_Date::format($_POST['fecha_capacitacion'], Helper_Date::DATE_EN);
      }
  }
  
  public function action_index()
  {

    // Listamos
   
    $capacitaciones = ORM::factory('Capacitacion');
    $collection = $capacitaciones->find_all();
    $this->template->content = View::factory('capacitaciones/index')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','capacitaciones',array('Listado','active')));
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
        $capacitacion->values($post->as_array(), array('titulo','descripcion','cupos','fecha_capacitacion','hora','lugar',));


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
  $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','capacitaciones',array('Nuevo','active')));
  }

  public function action_edit()
  {
    $id = $this->request->param('id');
    $capacitacion = ORM::factory('Capacitacion',$id);

    if ($capacitacion->loaded())
    {
      // Load was successful
      if (isset($_POST) && Valid::not_empty($_POST))
      {

        // Factory es un patron de diseño, tener en cuenta.
        $post = Validation::factory($_POST)
                ->rule('titulo','not_empty')
                ->rule('descripcion','not_empty')
                ->rule('cupos','not_empty')
                ->rule('fecha_capacitacion','not_empty')
                ->rule('hora','not_empty')
                ->rule('lugar','not_empty');

        if ($post->check()) {
          // Agregamos los datos al modelo instanciado
          $capacitacion->values($_POST, array('id','titulo', 'descripcion', 'cupos', 'fecha_capacitacion', 'hora', 'lugar'));
          try
          {

            $capacitacion->update();
            // ver a donde redireccionamos
            $this->redirect('capacitaciones/index');
          }
          catch (ORM_Validation_Exception $e)
          {
            $errors = $e->errors('capacitacion');
          }
        }
      }
    }
    $this->template->content = View::factory('capacitaciones/edit')
     ->bind('capacitacion', $capacitacion)
     ->bind('errors', $errors);
    $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','capacitaciones',array('Editar','active')));
  }

  public function action_delete()
  {
    // Borramos la capacitacion
    $id = $this->request->param('id');
    $capacitacion = ORM::factory('Capacitacion',$id);
    $capacitacion->delete();
    $this->redirect('capacitaciones/index');
  }

  public function action_inscripcion()
  {
    $this->template->content = View::factory('capacitaciones/inscripcion');
    $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','capacitaciones',array('Nueva','active')));
  }
}