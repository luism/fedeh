<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Pacientes extends Controller_Template_Base
{
private $subtitulo = '';
// Listado de estados de pacientes
public $ESTADO = array('activo' => 'Activo','no_activo' => 'No activo','en_tratamiento' => 'En tratamiento',);

  public function before(){
    parent::before();
    // Podria verificar el ROl del usuario y mostrar una panta que 
    // que informe que no está autorizado a ver este recurso
  }

  public function action_index()
  {

    // Listamos
    $pacientes = ORM::factory('Paciente');
    $collection = $pacientes->find_all();
    $this->template->content = View::factory('pacientes/index')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Pacientes</li>
    </ol>";
  }

  public function action_new()
  {
    // Creamos y guardamos el paciente, pero primero verificar que mando datos:
    $persona = ORM::factory('Persona');
    $paciente = ORM::factory('Paciente');
    if (isset($_POST) && Valid::not_empty($_POST))
    {      
      // Factory es un patron de diseño, tener en cuenta.
      $post = Validation::factory($_POST)
              ->rule('nombre','not_empty')
              ->rule('apellido','not_empty')
              ->rule('domicilio_personal','not_empty')
              ->rule('email','not_empty')
              ->rule('telefono','not_empty')
              ->rule('estado','not_empty');
              
      if ($post->check()) {
        $persona->values($post->as_array(),array('nombre','apellido','domicilio_personal','email','telefono','donante','grupo_sanguineo'));
        $paciente->values($post->as_array(),array('estado'));
        try
        {
          $persona->save();
          try
          {
            $paciente->values(array('persona_id' => $persona->id));
            $paciente->save();
            $this->redirect('pacientes/index');
          }
          catch (ORM_Validation_Exception $e)
          {
            $errors = $e->errors('paciente');
          }          
        } 
        catch (ORM_Validation_Exception $e)
        {
          $errors = $e->errors('persona');          
        }
      }
      else
      {
        $errors = $post->errors('paciente');
      }
    }

    // Listado de tipos de estados
    $estado = $this->ESTADO;
    $subtitulo = 'Nuevo';
    // Mostramos formulario para nuevo paciente
    $this->template->content = View::factory('pacientes/form')
         ->bind('persona', $persona)
         ->bind('paciente', $paciente)
         ->bind('estado', $estado)
         ->bind('subtitulo', $subtitulo)
         ->bind('errors', $errors);
   }

  public function action_edit()
  {
    $paciente = ORM::factory('Paciente',$this->request->param('id'));
    $persona = ORM::factory('Persona',$paciente->persona->id);
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
              ->rule('estado','not_empty');
      if ($post->check()) {
        $persona->values($_POST,array('nombre','apellido','domicilio_personal','email','telefono','donante','grupo_sanguineo'));
        $paciente->values($post->as_array(),array('estado'));
        try
        {
          $persona->save();
          try
          {
            $paciente->save();
            // ver a donde redireccionamos
            $this->redirect('pacientes/index');
          }
          catch (ORM_Validation_Exception $e)
          {
            $errors = $e->errors('paciente');
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


    $estado = $this->ESTADO;
    $this->template->content = View::factory('pacientes/form')
         ->bind('persona', $persona)
         ->bind('paciente', $paciente)
         ->bind('estado', $estado)
         ->bind('subtitulo', $subtitulo)
         ->bind('errors', $errors);
  }

  public function action_delete()
  {
    // Borramos el paciente
    $id = $this->request->param('id');
    $user = ORM::factory('Paciente',$id);
    $persona = $user->persona;
    # TODO agregar control de error al borrar
    $user->delete();
    $persona->delete();
    $this->redirect('pacientes/index');
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
    $pacientes = ORM::factory('Paciente');
   
    // Del Libro de Kohana 3.0
    // $query = DB::select()
    // ->from('pacientes')
    // ->join('personas')
    // ->on('pacientes.persona_id', '=', 'personas.id')
    // ->where('nombre', 'like',"%$name%")
    // ->and_where('apellido', 'like',"%$apellido%");
    //$collection = $query->execute()->as_array();
    // $collection = $query->as_object()->execute();

    $collection = ORM::factory('Paciente')
    ->join('personas')
    ->on('paciente.persona_id', '=', 'personas.id')
    ->where('nombre', 'like',"%$name%")
    ->and_where('apellido', 'like',"%$apellido%")
    ->find_all();

    $this->template->content = View::factory('pacientes/consulta')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection)
         ->bind('apellido',$apellido)
         ->bind('name',$name);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Pacientes</li>
    </ol>";
  }
}