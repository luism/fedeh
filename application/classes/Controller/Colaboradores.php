<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Colaboradores extends Controller_Template_Base
{

public function before(){
    parent::before();
    // Fix manual para fechas:
      if(isset($_POST['fecha_nacimiento']))
      {
        $_POST['fecha_nacimiento'] = Helper_Date::format($_POST['fecha_nacimiento'], Helper_Date::DATE_EN);
      }
  }
  
  public function action_index()
  {

    // Listamos
    $colaboradores = ORM::factory('Colaborador');
    $collection = $colaboradores->find_all();
    $this->template->content = View::factory('colaboradores/index')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Colaboradores</li>
    </ol>";
  }

  public function action_new()
  {
    // Creamos y guardamos el colaborador, pero primero verificar que mando datos:
    $persona = ORM::factory('Persona');
    $colaborador = ORM::factory('Colaborador');
    if (isset($_POST) && Valid::not_empty($_POST))
    {      
      // Factory es un patron de diseño, tener en cuenta.
      $post = Validation::factory($_POST)
              ->rule('nombre','not_empty')
              ->rule('apellido','not_empty')
              ->rule('domicilio_personal','not_empty')
              ->rule('email','not_empty')
              ->rule('telefono','not_empty')
              ->rule('tipo_documento','not_empty')
              ->rule('nro_documento','not_empty')
              ->rule('fecha_nacimiento','not_empty');

      if ($post->check()) {
        $persona->values($post->as_array(),array('nombre','apellido','domicilio_personal','email','telefono','donante','grupo_sanguineo'));
        $colaborador->values($post->as_array(),array('tipo_documento','nro_documento','fecha_nacimiento'));
        try
        {
          $persona->save();
          try
          {
            $colaborador->values(array('persona_id' => $persona->id));
            $colaborador->save();
            // $socio->generar_cuenta();
            // ver a donde redireccionamos
            $this->redirect('colaboradores/index');
          }
          catch (ORM_Validation_Exception $e)
          {
            $errors = $e->errors('colaborador');
          }          
        } 
        catch (ORM_Validation_Exception $e)
        {
          $errors = $e->errors('persona');          
        }
      }
      else
      {
        $errors = $post->errors('colaborador');
      }
    }

    //$subtitulo = 'Nuevo';
    // Mostramos formulario para nuevo socio
    $this->template->content = View::factory('colaboradores/new')
         ->bind('persona', $persona)
         ->bind('colaborador', $colaborador)
         //->bind('subtitulo', $subtitulo)
         ->bind('errors', $errors);
  }

  public function action_edit()
  {
    $colaborador = ORM::factory('Colaborador',$this->request->param('id'));
    $persona = ORM::factory('Persona',$colaborador->persona->id);
    //$subtitulo = 'Editar';

    if (isset($_POST) && Valid::not_empty($_POST))
    {      
      // Factory es un patron de diseño, tener en cuenta.
      $post = Validation::factory($_POST)
              ->rule('nombre','not_empty')
              ->rule('apellido','not_empty')
              ->rule('domicilio_personal','not_empty')
              ->rule('email','not_empty')
              ->rule('telefono','not_empty');
      if ($post->check()) {
        $persona->values($_POST,array('nombre','apellido','domicilio_personal','email','telefono','donante','grupo_sanguineo'));
        $colaborador->values($post->as_array(),array('tipo_documento','nro_documento','fecha_nacimiento'));
        try
        {
          $persona->save();
          try
          {
            $colaborador->save();
            // ver a donde redireccionamos
            $this->redirect('colaboradores/index');
          }
          catch (ORM_Validation_Exception $e)
          {
            $errors = $e->errors('colaborador');
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


    $this->template->content = View::factory('colaboradores/edit')
         ->bind('persona', $persona)
         ->bind('colaborador', $colaborador)
         //->set('ficha', ORM::factory('Ficha'))
         //->set('monto', '')
         //->bind('tipos_aportes', $tipos_aportes)
         //->bind('subtitulo', $subtitulo)
         ->bind('errors', $errors);
  }

  public function action_delete()
  {
    // Borramos el colaborador
    $id = $this->request->param('id');
    $colaborador = ORM::factory('Colaborador',$id);
    $persona = $colaborador->persona;
    # TODO agregar control de error al borrar
    $colaborador->delete();
    $persona->delete();
    $this->redirect('colaboradores/index');
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

    $doc = '';
    if (isset($_POST['doc']))
    {
      $dni = $_POST['doc'];
    }

    $pacientes = ORM::factory('Colaborador');
    // Del Libro de Kohana 3.0
    $query = DB::select()
    ->from('colaboradores')
    ->join('personas')
    ->on('colaboradores.persona_id', '=', 'personas.id')
    ->where('nombre', 'like',"%$name%")
    ->and_where('apellido', 'like',"%$apellido%")
    ->and_where('nro_documento','like',"%$doc%");
    $collection = $query->execute()->as_array();
  
    $this->template->content = View::factory('colaboradores/consulta')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection)
         ->bind('apellido',$apellido)
         ->bind('name',$name)
         ->bind('doc',$doc);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Colaboradores</li>
    </ol>";
  }
}