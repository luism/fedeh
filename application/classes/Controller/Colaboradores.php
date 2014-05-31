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
    $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Colaboradores',array('Listado','active')));
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
    $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Colaboradores',array('Nuevo','active')));
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
    $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Colaboradores',array('Editar','active')));
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
      $doc = $_POST['doc'];
    }

    $colaboradores = ORM::factory('Colaborador');
    // Del Libro de Kohana 3.0
    /*$query = DB::select()
    ->from('colaboradores')
    ->join('personas')
    ->on('colaboradores.persona_id', '=', 'personas.id')
    ->where('nombre', 'like',"%$name%")
    ->and_where('apellido', 'like',"%$apellido%")
    ->and_where('nro_documento','like',"%$doc%");
    $collection = $query->execute()->as_array();*/

    $collection = ORM::factory('Colaborador')
    ->join('personas')
    ->on('colaborador.persona_id', '=', 'personas.id')
    ->where('nombre', 'like',"%$name%")
    ->and_where('apellido', 'like',"%$apellido%")
    ->and_where('nro_documento', 'like', "%$doc%")
    ->find_all();

    $this->template->content = View::factory('colaboradores/consulta')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection)
         ->bind('apellido',$apellido)
         ->bind('name',$name)
         ->bind('doc',$doc);
    $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Colaboradores',array('Consultar','active')));
  }

  public function action_asignar()
  {
    $errors = '';
    if (isset($_POST) && Valid::not_empty($_POST))
    {
      $desde_ficha = $_POST['desde_ficha'];
      $hasta_ficha = $_POST['hasta_ficha'];
      $colaborador_id = $_POST['colaborador_id'];

      try
      {
        # Desasgina las fichas que tenia el coalborador
        $query = DB::update('fichas')
                ->set(array('colaborador_id' => NULL))
                ->where('colaborador_id', '=', $colaborador_id);
                echo $query;
        $query->execute();
        # Asigna las nuevas fichas al colaborador
        $query = DB::update('fichas')
                ->set(array('colaborador_id' => $colaborador_id))
                ->where('id', '>=', $desde_ficha)
                ->and_where('id', '<=', $hasta_ficha);
                echo $query;
        $query->execute();
      }
      catch (ORM_Validation_Exception $e)
      {
        $errors = $e->errors('fichas');
      }

      // $colaborador = ORM::factory('Colaborador', $colaborador_id);
      // $fichas = ORM::factory('Fichas')->where('id', '>', $desde_ficha)->and_where('id', '<', $hasta_ficha)
      // ->find_all();
      // $fichas->colaborador_id
      // foreach ($fichas as $ficha)
      // {
      //   $ficha->colaborador_id = $colaborador_id;

      //   $ficha->save();
      // }
    }
    $colaboradores = Model_Colaborador::lista_colaboradores();
    $this->template->content = View::factory('colaboradores/asignar')
    // Pasamos la variable colaboradores con todos los registros traidos
         ->bind('errors',$errors)
         ->bind('colaboradores',$colaboradores);
    $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Colaboradores',array('Asignar','active')));
  }

  public function action_resumen()
  {
    $colaboradores = ORM::factory('Colaborador')->find_all();
    $this->template->content = View::factory('colaboradores/resumen')
    ->bind('colaboradores', $colaboradores);
    
    $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Colaboradores',array('Resumen','active')));
  }
}