<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Judiciales extends Controller_Template_Base
{
private $subtitulo = '';

public function before(){
    parent::before();
    // Fix manual para fechas:
      if(isset($_POST['fecha_oficio']))
      {
        $_POST['fecha_oficio'] = Helper_Date::format($_POST['fecha_oficio'], Helper_Date::DATE_EN);
      }
  }
  public function action_index()
  {

    // Listamos
    $judiciales = ORM::factory('Judicial');
    $collection = $judiciales->find_all();
    $this->template->content = View::factory('judiciales/index')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Judiciales',array('Listado','active')));
  }

  public function action_new()
  {
    // Creamos y guardamos el socio judicial, pero primero verificar que mando datos:
    $persona = ORM::factory('Persona');
    $judicial = ORM::factory('Judicial');
    if (isset($_POST) && Valid::not_empty($_POST))
    {      
      // Factory es un patron de diseño, tener en cuenta.
      $post = Validation::factory($_POST)
              ->rule('nombre','not_empty')
              ->rule('apellido','not_empty')
              ->rule('domicilio_personal','not_empty')
              ->rule('email','not_empty')
              ->rule('telefono','not_empty')
              ->rule('numero_oficio','not_empty')
              ->rule('fecha_oficio','not_empty')
              ->rule('causa','not_empty')
              ->rule('juzgado','not_empty')
              ->rule('cantidad_cuotas','not_empty')
              ->rule('monto_cuotas','not_empty');
      if ($post->check()) {
        $persona->values($post->as_array(),array('nombre','apellido','domicilio_personal','email','telefono','donante','grupo_sanguineo'));
        $judicial->values($post->as_array(),array('numero_oficio','fecha_oficio','causa','juzgado','cantidad_cuotas','monto_cuotas'));
        try
        {
          $persona->save();
          try
          {
            $judicial->values(array('persona_id' => $persona->id));
            #Genero la cuenta para socio judicial
            $persona->generar_cuentajudicial(2,$post->as_array()['monto_cuotas'],$post->as_array()['cantidad_cuotas']);
            //$persona->generar_cuentajudicial(2,$post->as_array()['monto_cuotas'],$tipo_aporte = 'mensual');
            $judicial->save();
            $this->redirect('judiciales/index');
          }
          catch (ORM_Validation_Exception $e)
          {
            $errors = $e->errors('judicial');
          }          
        } 
        catch (ORM_Validation_Exception $e)
        {
          $errors = $e->errors('persona');          
        }
      }
      else
      {
        $errors = $post->errors('judicial');
      }
    }

    // Listado de tipos de aporte
    $subtitulo = 'Nuevo';
    // Mostramos formulario para nuevo judicial
    $this->template->content = View::factory('judiciales/form')
         ->bind('persona', $persona)
         ->bind('judicial', $judicial)
         //->bind('monto', $post['monto'])
         ->bind('subtitulo', $subtitulo)
         ->bind('errors', $errors);
  $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Judiciales',array('Nuevo','active')));
  }

  public function action_edit()
  {
    $judicial = ORM::factory('Judicial',$this->request->param('id'));
    $persona = ORM::factory('Persona',$judicial->persona->id);
    $subtitulo = 'Editar';

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
        $judicial->values($post->as_array(),array('numero_oficio','fecha_oficio','causa','juzgado','cantidad_cuotas','monto_cuotas'));
        try
        {
          $persona->save();
          try
          {
            $judicial->save();
            // ver a donde redireccionamos
            $this->redirect('judiciales/index');
          }
          catch (ORM_Validation_Exception $e)
          {
            $errors = $e->errors('judicial');
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
    $this->template->content = View::factory('judiciales/form')
         ->bind('persona', $persona)
         ->bind('judicial', $judicial)
         //->set('ficha', ORM::factory('Ficha'))
         //->set('monto', '')
         //->bind('tipos_aportes', $tipos_aportes)
         ->bind('subtitulo', $subtitulo)
         ->bind('errors', $errors); 
  $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Judiciales',array('Editar','active'))); 
  }

  public function action_delete()
  {
    // Borramos el socio judicial
    $id = $this->request->param('id');
    $judicial = ORM::factory('Judicial',$id);
    $persona = $judicial->persona;
    # TODO agregar control de error al borrar
    $judicial->delete();
    $persona->delete();
    $this->redirect('judiciales/index');
  
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

    $nro_oficio = '';
    if (isset($_POST['nro_oficio']))
    {
      $nro_oficio = $_POST['nro_oficio']; 
    }

    $judiciales = ORM::factory('Judicial');
    // Del Libro de Kohana 3.0
    /*$query = DB::select()
    ->from('judiciales')
    ->join('personas')
    ->on('judiciales.persona_id', '=', 'personas.id')
    ->where('nombre', 'like',"%$name%")
    ->and_where('apellido', 'like',"%$apellido%")
    ->and_where('numero_oficio', 'like', "%$nro_oficio%");
    $collection = $query->execute()->as_array();*/

    $collection = ORM::factory('Judicial')
    ->join('personas')
    ->on('judicial.persona_id', '=', 'personas.id')
    ->where('nombre', 'like',"%$name%")
    ->and_where('apellido', 'like',"%$apellido%")
    ->and_where('numero_oficio', 'like', "%$nro_oficio%")
    ->find_all();
  
    $this->template->content = View::factory('judiciales/consulta')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection)
         ->bind('apellido',$apellido)
         ->bind('name',$name)
         ->bind('nro_oficio',$nro_oficio);
    $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Judiciales',array('Consulta','active')));
  }

  /**
   * Ver Judicial
   * @return void
   */
  public function action_ver()
  {
    $judicial = ORM::factory('Judicial', $this->request->param('id'));
    if ($judicial->loaded())
    {
      $persona = $judicial->persona;
      $plan_de_cuenta = $persona->plan_de_cuenta;
      $lineas_cuentas_corrientes = $plan_de_cuenta->lineas_cuentas_corrientes->find_all();
      $this->template->content = View::factory('judiciales/ver')
      ->bind('judicial',$judicial)
      ->bind('persona',$persona)
      ->bind('plan_de_cuenta',$plan_de_cuenta)
      ->bind('lineas_cuentas_corrientes',$lineas_cuentas_corrientes);
    }
    else
    {
      $this->redirect('judiciales/index');
    }
  }
}