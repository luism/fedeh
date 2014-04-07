<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Empresas extends Controller_Template_Base
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
    $empresas = ORM::factory('Empresa');
    $collection = $empresas->find_all();
    $this->template->content = View::factory('empresas/index')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Empresas</li>
    </ol>";
  }

  public function action_new()
  {
    // Creamos y guardamos la empresa, pero primero verificar que mando datos:
    $persona = ORM::factory('Persona');
    $empresa = ORM::factory('Empresa');
    if (isset($_POST) && Valid::not_empty($_POST))
    {      
      // Factory es un patron de diseño, tener en cuenta.
      $post = Validation::factory($_POST)
              ->rule('nombre','not_empty')
              ->rule('apellido','not_empty')
              ->rule('domicilio_personal','not_empty')
              ->rule('email','not_empty')
              ->rule('telefono','not_empty')
              ->rule('rubro','not_empty')
              ->rule('nombre_empresa','not_empty')
              ->rule('cuit','not_empty');
        if ($post->check()) {
        $persona->values($post->as_array(),array('nombre','apellido','domicilio_personal','email','telefono','donante','grupo_sanguineo'));
        $empresa->values($post->as_array(),array('rubro','nombre_empresa','cuit'));
        try
        {
          $persona->save();
          try
          {
            $empresa->values(array('persona_id' => $persona->id));
            $empresa->save();
           // ver a donde redireccionamos
            $this->redirect('empresas/index');
          }
          catch (ORM_Validation_Exception $e)
          {
            $errors = $e->errors('empresa');
          }          
        } 
        catch (ORM_Validation_Exception $e)
        {
          $errors = $e->errors('persona');          
        }
      }
      else
      {
        $errors = $post->errors('empresa');
      }
    }

    $subtitulo = 'Nuevo';
    // Mostramos formulario para nueva empresa
    $this->template->content = View::factory('empresas/form')
         ->bind('persona', $persona)
         ->bind('empresa', $empresa)
         ->bind('subtitulo', $subtitulo)
         ->bind('errors', $errors);
  }

  public function action_edit()
  {
    $empresa = ORM::factory('Empresa',$this->request->param('id'));
    $persona = ORM::factory('Persona',$empresa->persona->id);
    $subtitulo = 'Editar';

    if (isset($_POST) && Valid::not_empty($_POST))
    {      
      // Factory es un patron de diseño, tener en cuenta.
      $post = Validation::factory($_POST)
              ->rule('nombre','not_empty')
              ->rule('apellido','not_empty')
              ->rule('domicilio_personal','not_empty')
              ->rule('email','not_empty')
              ->rule('telefono','not_empty')
              ->rule('rubro','not_empty')
              ->rule('nombre_empresa','not_empty')
              ->rule('cuit','not_empty');
      if ($post->check()) {
        $persona->values($_POST,array('nombre','apellido','domicilio_personal','email','telefono','donante','grupo_sanguineo'));
        $empresa->values($post->as_array(),array('rubro','nombre_empresa','cuit'));
        try
        {
          $persona->save();
          try
          {
            $empresa->save();
            // ver a donde redireccionamos
            $this->redirect('empresas/index');
          }
          catch (ORM_Validation_Exception $e)
          {
            $errors = $e->errors('empresa');
          }          
        } 
        catch (ORM_Validation_Exception $e)
        {
          $errors = $e->errors('persona');          
        }
      }
      else
      {
        $errors = $post->errors('persona');
      }
    } 
    $this->template->content = View::factory('empresas/form')
         ->bind('persona', $persona)
         ->bind('empresa', $empresa)
         ->bind('subtitulo', $subtitulo)
         ->bind('errors', $errors);    
  }

  public function action_delete()
  {
    // Borramos la empresa
    $id = $this->request->param('id');
    $empresa = ORM::factory('Empresa',$id);
    $persona = $empresa->persona;
    # TODO agregar control de error al borrar
    $empresa->delete();
    $persona->delete();
    $this->redirect('empresas/index');
  }
}