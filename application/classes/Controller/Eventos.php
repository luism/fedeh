<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Eventos extends Controller_Template_Base
{
public function before(){
    parent::before();
    // Fix manual para fechas:
      if(isset($_POST['fecha']))
      {
        $_POST['fecha'] = Helper_Date::format($_POST['fecha'], Helper_Date::DATE_EN);
      }
  }

  public function action_index()
  {
    // Listamos
    $eventos = ORM::factory('Evento');
    $collection = $eventos->find_all();
    $this->template->content = View::factory('eventos/index')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Eventos</li>
    </ol>";
  }

  public function action_new()
  {
  
    if (isset($_POST) && Valid::not_empty($_POST))
    {
      // Fix manual para fechas:
      //echo "1";
      //if($_POST['fecha'])
      //{
      //  echo "2";
      //  $_POST['fecha'] = Helper_Date::format($_POST['fecha'], Helper_Date::DATE_EN);
      //}
      // Factory es un patron de diseño, tener en cuenta.
      $post = Validation::factory($_POST)
              ->rule('nombre','not_empty')
              ->rule('fecha','not_empty')
              ->rule('hora','not_empty')
              ->rule('lugar','not_empty')
              ->rule('descripcion','not_empty');
              //->rule('gasto_total','gasto_total=gastos_decoracion+gastos_imprenta+gastos_movilidad+gastos_permisos+gastos_servicios+gastos_tecnica+gastos_varios');
      if ($post->check())
      {
        // Instanciamos un evento
        $evento = ORM::factory('Evento');
        // Agregamos los datos al modelo instanciado
        $evento->values($post->as_array(), array('nombre','fecha','hora','lugar','descripcion','ingresos','gastos_decoracion','gastos_imprenta','gastos_movilidad','gastos_permisos','gastos_servicios','gastos_tecnica','gastos_varios',));
        // 'gasto_total' => $post['gasto_total'],            
        try
        {
          $evento->save();
          $this->redirect('eventos/index');
        }
        catch (ORM_Validation_Exception $e)
        {
          $errors = $e->errors('evento');
        }
      }
    }

    $this->template->content = View::factory('eventos/new')
         ->bind('post', $post)
         ->bind('errors', $errors);
  }

  public function action_edit()
  {
    $id = $this->request->param('id');
    $evento = ORM::factory('Evento',$id);

    if ($evento->loaded())
    {
      // Load was successful
      if (isset($_POST) && Valid::not_empty($_POST))
      {

        // Factory es un patron de diseño, tener en cuenta.
        $post = Validation::factory($_POST)
                ->rule('nombre','not_empty')
                ->rule('fecha','not_empty')
                ->rule('hora','not_empty')
                ->rule('lugar','not_empty')
                ->rule('descripcion','not_empty');

        if ($post->check()) {
          // Agregamos los datos al modelo instanciado
          $evento->values($post->as_array(), array('nombre','fecha','hora','lugar','descripcion','ingresos','gastos_decoracion','gastos_imprenta','gastos_movilidad','gastos_permisos','gastos_servicios','gastos_tecnica','gastos_varios',));
          try
          {

            $evento->update();
            // ver a donde redireccionamos
            $this->redirect('eventos/index');
          }
          catch (ORM_Validation_Exception $e)
          {
            $errors = $e->errors('evento');
          }
        }
      }
    }
    $this->template->content = View::factory('eventos/edit')
     ->bind('evento', $evento)
     ->bind('errors', $errors);
  }

  public function action_delete()
  {
    // Borramos el Evento
    $id = $this->request->param('id');
    $evento = ORM::factory('Evento',$id);
    $evento->delete();
    $this->redirect('eventos/index');
  }

  public function action_balance()
  {
    $name = '';
    if (isset($_POST['name']))
    {
      $name = $_POST['name'];
    }
    $eventos = ORM::factory('Evento');
   
    // Del Libro de Kohana 3.0
    /*$query = DB::select()
    ->from('eventos')
    ->where('nombre', 'like',"%$name%");
    //$collection = $query->execute()->as_array();
    $collection = $query->as_object()->execute();*/
    $collection = ORM::factory('Evento')
      ->where('nombre', 'like',"%$name%")
      ->find_all();

  
    $this->template->content = View::factory('eventos/balance')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection)
         ->bind('name',$name);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Eventos</li>
    </ol>";
  }
}