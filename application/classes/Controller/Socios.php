<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Socios extends Controller_Template_Base
{
  private $subtitulo = '';
  // Listado de tipos de aporte
  public $TIPOS_APORTES = array('mensual' => 'Mensual','trimestral' => 'Trimestral','semestral' => 'Semestral','anual' => 'Anual',);

  public function before(){
    parent::before();
    // Podria verificar el ROl del usuario y mostrar una panta que 
    // que informe que no está autorizado a ver este recurso
    // Fix manual para fechas:
      if(isset($_POST['fecha_nacimiento']))
      {
        $_POST['fecha_nacimiento'] = Helper_Date::format($_POST['fecha_nacimiento'], Helper_Date::DATE_EN);
      }
  }

  public function action_index()
  {

    // Listamos
    $socios = ORM::factory('Socio');
    $collection = $socios->find_all();
    $this->template->content = View::factory('socios/index')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Socios</li>
    </ol>";
  }

  public function action_new()
  {
    // Creamos y guardamos el socio, pero primero verificar que mando datos:
    $persona = ORM::factory('Persona');
    $socio = ORM::factory('Socio');
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
              ->rule('fecha_nacimiento','not_empty')
              ->rule('tipo_aporte','not_empty');
      if ($post->check()) {
        $persona->values($post->as_array(),array('nombre','apellido','domicilio_personal','email','telefono','donante','grupo_sanguineo'));
        $socio->values($post->as_array(),array('tipo_documento','nro_documento','domicilio_laboral','fecha_nacimiento','tipo_aporte','descuento_planilla','numero_ficha'));
        try
        {
          $persona->save();
          try
          {
            $socio->values(array('persona_id' => $persona->id));
            $socio->save();
            // $socio->generar_cuenta();
            // ver a donde redireccionamos
            $this->redirect('socios/index');
          }
          catch (ORM_Validation_Exception $e)
          {
            $errors = $e->errors('socio');
          }          
        } 
        catch (ORM_Validation_Exception $e)
        {
          $errors = $e->errors('persona');          
        }
      }
      else
      {
        $errors = $post->errors('socio');
      }
    }

    // Listado de tipos de aporte
    $tipos_aportes = $this->TIPOS_APORTES;
    $subtitulo = 'Nuevo';
    // Mostramos formulario para nuevo socio
    $this->template->content = View::factory('socios/form')
         ->bind('persona', $persona)
         ->bind('socio', $socio)
         ->bind('ficha', $ficha)
         ->bind('monto', $post['monto'])
         ->bind('tipos_aportes', $tipos_aportes)
         ->bind('subtitulo', $subtitulo)
         ->bind('errors', $errors);
  }

  public function action_edit()
  {
    $socio = ORM::factory('Socio',$this->request->param('id'));
    $persona = ORM::factory('Persona',$socio->persona->id);
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
        $socio->values($post->as_array(),array('tipo_documento','nro_documento','domicilio_laboral','fecha_nacimiento','tipo_aporte','descuento_planilla','numero_ficha'));
        try
        {
          $persona->save();
          try
          {
            $socio->save();
            // ver a donde redireccionamos
            $this->redirect('socios/index');
          }
          catch (ORM_Validation_Exception $e)
          {
            $errors = $e->errors('socio');
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


    $tipos_aportes = $this->TIPOS_APORTES;
    $this->template->content = View::factory('socios/form')
         ->bind('persona', $persona)
         ->bind('socio', $socio)
         ->set('ficha', ORM::factory('Ficha'))
         ->set('monto', '')
         ->bind('tipos_aportes', $tipos_aportes)
         ->bind('subtitulo', $subtitulo)
         ->bind('errors', $errors);
  }

  public function action_delete()
  {
    // Borramos el socio
    $id = $this->request->param('id');
    $socio = ORM::factory('Socio',$id);
    $persona = $socio->persona;
    # TODO agregar control de error al borrar
    $socio->delete();
    $persona->delete();
    $this->redirect('socios/index');
  }
  public function action_consulta()
  {
    // Listamos
    $socios = ORM::factory('Socio');
    $collection = $socios->find_all();
    $this->template->content = View::factory('socios/consulta')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Socios</li>
    </ol>";
    


    //$socio = ORM::factory('Socio')
            
      //      ->find_all();
    //$collection = $socios->find_all();
    //$this->template->content = View::factory('socios/consulta')
    // Pasamos la variable socio con todos los registros traidos
        // ->bind('persona', $socio->persona)
        // ->bind('socio', $socio)
        // ->bind('ficha', $socio->ficha)
        // ->bind('monto', $post['monto'])
        // ->bind('tipos_aportes', $tipos_aportes)
        // ->bind('errors', $errors);

    //$this->template->breadcrumb = "
    //<ol class=\"breadcrumb\">
      //<li><a href=\"#\">Home</a></li>
      //<li class=\"active\">Socios</li>
    //</ol>";
  }

  public function action_descuentoplanilla()
  {

    // Listamos
    $socios = ORM::factory('Socio');
    $collection = $socios->find_all();
    $this->template->content = View::factory('socios/descuentoplanilla')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Socios</li>
    </ol>";
  }

  public function action_fichasdisp()
  {

    // Listamos
    $socios = ORM::factory('Socio');
    $collection = $socios->find_all();
    $this->template->content = View::factory('socios/fichasdisp')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Socios</li>
    </ol>";
  }

  public function action_ver()
  {
    $socio = ORM::factory('Socio', $this->request->param('id'));
    if ($socio->loaded())
    {
      $this->template->content = View::factory('socios/ver')
      ->bind('socio',$socio);
    }
    else
    {
      $this->redirect('socios/index');
    }
  }

}