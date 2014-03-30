<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Notas extends Controller_Template_Base {

  public function before()
  {
    parent::before();
    // Fix manual para fechas:
    if(isset($_POST['fecha_nota']))
    {
      $_POST['fecha_nota'] = Helper_Date::format($_POST['fecha_nota'], Helper_Date::DATE_EN);
    }
    if(isset($_POST['fecha_expte']))
    {
      $_POST['fecha_expte'] = Helper_Date::format($_POST['fecha_expte'], Helper_Date::DATE_EN);
    }
  }
  
  public function action_index()
  {

    // Listamos
   
    $notas = ORM::factory('Nota');
    $collection = $notas->find_all();
    $this->template->content = View::factory('notas/index')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Notas</li>
    </ol>";
  }

  public function action_new()
  {  
    if (isset($_POST) && Valid::not_empty($_POST))
    {

      // Factory es un patron de diseño, tener en cuenta.
      $post = Validation::factory($_POST)
              ->rule('motivo','not_empty')
              ->rule('fecha_nota','not_empty')
              ->rule('dirigida_a','not_empty');

      if ($post->check()) {
        // Instanciamos una nota
        $nota = ORM::factory('Nota');
        // Agregamos los datos al modelo instanciado
        $nota->values($post, array('motivo', 'fecha_nota', 'dirigida_a', 'expte_generado', 'entidad_expte', 'fecha_expte',));
        try{
          $nota->save();
          // ver a donde redireccionamos
          $this->redirect('notas/index');
        }
        catch (ORM_Validation_Exception $e){
          $errors = $e->errors('nota');
        }
      }
    }

    $this->template->content = View::factory('notas/new')
         ->bind('post', $post)
         ->bind('errors', $errors);
  }

  public function action_edit()
  {
    $id = $this->request->param('id');
    $nota = ORM::factory('Nota',$id);

    if ($nota->loaded())
    {
      // Load was successful
      if (isset($_POST) && Valid::not_empty($_POST))
      {

        // Factory es un patron de diseño, tener en cuenta.
        $post = Validation::factory($_POST)
                ->rule('motivo','not_empty')
                ->rule('fecha_nota','not_empty')
                ->rule('dirigida_a','not_empty');

        if ($post->check()) {
          // Agregamos los datos al modelo instanciado
          $nota->values($_POST, array('id','motivo', 'fecha_nota', 'dirigida_a', 'expte_generado', 'entidad_expte', 'fecha_expte'));
          try
          {

            $nota->update();
            // ver a donde redireccionamos
            $this->redirect('notas/index');
          }
          catch (ORM_Validation_Exception $e)
          {
            $errors = $e->errors('nota');
          }
        }
      }
    }
    $this->template->content = View::factory('notas/form')
     ->bind('nota', $nota)
     ->bind('errors', $errors);
  }

  public function action_delete()
  {
    // Borramos la nota
    $id = $this->request->param('id');
    $nota = ORM::factory('Nota',$id);
    $nota->delete();
    $this->redirect('notas/index');
  }
}