<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contactos extends Controller_Template_Base
{
  private $subtitulo = '';

  public function before(){
    parent::before();
    // Podria verificar el ROl del usuario y mostrar una panta que 
    // que informe que no está autorizado a ver este recurso
  }

  public function action_index()
  {

    // Listamos
    $contactos = ORM::factory('Contacto');
    $collection = $contactos->find_all();
    $this->template->content = View::factory('contactos/index')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Contactos',array('Listado','active')));
  }

  public function action_new()
  {
    // Creamos y guardamos el contacto, pero primero verificar que mando datos:
    $persona = ORM::factory('Persona');
    $contacto = ORM::factory('Contacto');
    if (isset($_POST) && Valid::not_empty($_POST))
    {      
      // Factory es un patron de diseño, tener en cuenta.
      $post = Validation::factory($_POST)
              ->rule('nombre','not_empty')
              ->rule('apellido','not_empty')
              ->rule('domicilio_personal','not_empty')
              ->rule('email','not_empty')
              ->rule('telefono','not_empty')
              ->rule('profesion','not_empty');
      if ($post->check()) {
        $persona->values($post->as_array(),array('nombre','apellido','domicilio_personal','email','telefono','donante','grupo_sanguineo'));
        $contacto->values($post->as_array(),array('domicilio_laboral','profesion'));
        try
        {
          $persona->save();
          try
          {
            $contacto->values(array('persona_id' => $persona->id));
            $contacto->save();
            $this->redirect('contactos/index');
          }
          catch (ORM_Validation_Exception $e)
          {
            $errors = $e->errors('contacto');
          }          
        } 
        catch (ORM_Validation_Exception $e)
        {
          $errors = $e->errors('persona');          
        }
      }
      else
      {
        $errors = $post->errors('contacto');
      }
    }

    // Listado de tipos de aporte
    $subtitulo = 'Nuevo';
    // Mostramos formulario para nuevo contacto
    $this->template->content = View::factory('contactos/form')
         ->bind('persona', $persona)
         ->bind('contacto', $contacto)
         //->bind('monto', $post['monto'])
         ->bind('subtitulo', $subtitulo)
         ->bind('errors', $errors);
  $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Contactos',array('Nuevo','active')));
  }

  public function action_edit()
  {
    $contacto = ORM::factory('Contacto',$this->request->param('id'));
    $persona = ORM::factory('Persona',$contacto->persona->id);
    $ubtitulo = 'Editar';

    if (isset($_POST) && Valid::not_empty($_POST))
    {      
      // Factory es un patron de diseño, tener en cuenta.
      $post = Validation::factory($_POST)
              ->rule('nombre','not_empty')
              ->rule('apellido','not_empty')
              ->rule('domicilio_personal','not_empty')
              ->rule('email','not_empty')
              ->rule('telefono','not_empty')
              ->rule('profesion','not_empty');
      if ($post->check()) {
        $persona->values($_POST,array('nombre','apellido','domicilio_personal','email','telefono','donante','grupo_sanguineo'));
        $contacto->values($post->as_array(),array('domicilio_laboral','profesion'));
        try
        {
          $persona->save();
          try
          {
            $contacto->save();
            $this->redirect('contactos/index');
          }
          catch (ORM_Validation_Exception $e)
          {
            $errors = $e->errors('contacto');
          }          
        } 
        catch (ORM_Validation_Exception $e)
        {
          $errors = $e->errors('persona');          
        }
      }
      else
      {
        $errors = $post->errors('contacto');
      }
    }

    // Mostramos formulario para editar contacto
    $this->template->content = View::factory('contactos/form')
         ->bind('persona', $persona)
         ->bind('contacto', $contacto)
         //->bind('monto', $post['monto'])
         ->bind('subtitulo', $subtitulo)
         ->bind('errors', $errors);
  $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Contactos',array('Editar','active')));
  }

  public function action_delete()
  {
    // Borramos el contacto
    $id = $this->request->param('id');
    $contacto = ORM::factory('Contacto',$id);
    $persona = $contacto->persona;
    # TODO agregar control de error al borrar
    $contacto->delete();
    $persona->delete();
    $this->redirect('contactos/index');
  }

  public function action_consulta()
  {
    
    $apellido = '';
    if (isset($_POST['apellido']))
    {
      $apellido = $_POST['apellido'];      
    }
    
    $name = '';
    if (isset($_POST['name']))
    {
      $name = $_POST['name'];
    }
    $contactos = ORM::factory('Contacto');
    // Del Libro de Kohana 3.0
   /* $query = DB::select()
    ->from('contactos')
    ->join('personas')
    ->on('contactos.persona_id', '=', 'personas.id')
    ->where('nombre', 'like',"%$name%")
    ->and_where('apellido', 'like',"%$apellido%");
    $collection = $query->execute()->as_array();*/
    $collection = ORM::factory('Contacto')
    ->join('personas')
    ->on('contacto.persona_id', '=', 'personas.id')
    ->where('nombre', 'like',"%$name%")
    ->and_where('apellido', 'like',"%$apellido%")
    ->find_all();

    $this->template->content = View::factory('contactos/consulta')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection)
         ->bind('apellido',$apellido)
         ->bind('name',$name);
    $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Contactos',array('Consultar','active')));
  }
}