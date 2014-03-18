<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Eventos extends Controller_Template_Base {

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
      echo "1";
      if($_POST['fecha'])
      {
        echo "2";
        $_POST['fecha'] = Helper_Date::format($_POST['fecha'], Helper_Date::DATE_EN);
      }
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
        $evento->values(
          array(
            'nombre' => $post['nombre'],
            'fecha' => $post['fecha'],
            'hora' => $post['hora'],
            'lugar' => $post['lugar'],
            'descripcion' => $post['descripcion'],
            'ingresos' => $post['ingresos'],
            'gastos_decoracion' => $post['gastos_decoracion'],
            'gastos_imprenta' => $post['gastos_imprenta'],
            'gastos_movilidad' => $post['gastos_movilidad'],
            'gastos_permisos' => $post['gastos_permisos'],
            'gastos_servicios' => $post['gastos_servicios'],
            'gastos_tecnica' => $post['gastos_tecnica'],
            'gastos_varios' => $post['gastos_varios'],
            // 'gasto_total' => $post['gasto_total'],            
          )
        );
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

    // redireccionar al fomrulario si da error
    //$session->set('nota',$nota);
    //$session->set('errors',$errors);
    //$this->redirect('notas/new');
    $this->template->content = View::factory('eventos/new')
         ->bind('post', $post)
         ->bind('errors', $errors);
  }

  public function update() {}

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
    $this->template->content = View::factory('eventos/balance')
         ->bind('collection',$collection);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Eventos</li>
    </ol>";
  }
}