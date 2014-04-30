
<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Controlador de Socios
 */
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

  /**
   * Listado de socios.
   *
   * TODO: Agregar un paginador
   *
   * @return void
   */
  public function action_index()
  {

    // Listamos
    $socios = ORM::factory('Socio')->where('deshabilitado', '=', 'TRUE');
    $collection = $socios->find_all();
    $this->template->content = View::factory('socios/index')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio',array('Socios','active')));
  }

  /**
   * Nuevo Socio
   * @return void
   */
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
            # Generamos la cuenta.
            # TODO: Deberíamos pasar esto a algun Callback
<<<<<<< HEAD
            $persona->generar_cuenta(1,$post->as_array()['monto'],$post->as_array()['tipo_aporte']);
            $socio->asignar_ficha($post->as_array()['numero_ficha']);
=======
            $monto = $post->as_array()['monto'];
            $tipo_aporte = $post->as_array()['tipo_aporte'];
            $persona->generar_cuenta(1,$monto,$tipo_aporte);
>>>>>>> Arreglo un error cuando creo socio y genera la cuenta.`
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
         ->bind('tipos_aportes', $tipos_aportes)
         ->bind('subtitulo', $subtitulo)
         ->bind('errors', $errors);
    $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Socios',array('Nuevo','active')));
  }

  /**
   * Editar Socio
   * @return void
   */
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
    $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Socios',array('Editar','active')));
  }

  /**
   * Borrar Socio
   * @return void
   */
  public function action_delete()
  {
    // Borramos el socio
    try {
      $id = $this->request->param('id');
      if (!$id)
      {
        # Como estamos dentro de un try/catch, cuando generemos la nueva excepcion
        # se tomará la rama del catch donde haremos el manejo del error y mostraremos el mensaje.
        throw new Exception("No existe el registro para el id solicitado o no exite ningun id", 1);
      }
      $socio = ORM::factory('Socio',$id);
      $persona = $socio->persona;
      // if ($persona->tiene_cuenta())
      //   throw new Exception("Tiene Plan de Cuenta", 1);
      # TODO agregar control de error al borrar
      $socio->deshabilitado = TRUE;
      $socio->numero_ficha = NULL;
      $socio->ficha_id = NULL;
      $socio->save();
      $this->redirect('socios/index');

    } catch (Exception $e) {
      $this->redirect('socios/index');
    }
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

    $ficha = '';
    if (isset($_POST['ficha']))
    {
      $dni = $_POST['ficha'];
    }

    $socios = ORM::factory('Socio');
    // Del Libro de Kohana 3.0
    /*$query = DB::select()
    ->from('socios')
    ->join('personas')
    ->on('socios.persona_id', '=', 'personas.id')
    ->where('nombre', 'like',"%$name%")
    ->and_where('apellido', 'like',"%$apellido%");
    //->and_where('numero_ficha','like',"%$ficha%");
    $collection = $query->execute()->as_array();*/

    $collection = ORM::factory('Socio')
    ->join('personas')
    ->on('socio.persona_id', '=', 'personas.id')
    ->where('nombre', 'like',"%$name%")
    ->and_where('apellido', 'like',"%$apellido%")
    ->and_where('numero_ficha', 'like', "%$ficha%")
    ->find_all();

    $this->template->content = View::factory('socios/consulta')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection)
         ->bind('apellido',$apellido)
         ->bind('name',$name)
         ->bind('ficha',$ficha);
    $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Socios',array('Consulta','active')));
  }

  public function action_descuentoplanilla()
  {

    $socios = ORM::factory('Socio');

    /*$query = DB::select()
    ->from('socios')
    ->join('personas')
    ->on('socios.persona_id', '=', 'personas.id')
    ->where('descuento_planilla', 'like', 0);
    $collection = $query->as_object()->execute();
    //$collection = $query->execute()->as_object();*/
    $collection = ORM::factory('Socio')
        ->join('personas')
        ->on('socio.persona_id', '=', 'personas.id')
        ->where('descuento_planilla', 'like', 0)
        ->find_all();


    $this->template->content = View::factory('socios/descuentoplanilla')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Socios',array('Descuento por planilla','active')));
  }

  /**
   * Método para mostrar un listado de fichas disponibles.
   * TODO: Para poder hacerlo mas dinámico y agil deberiamos poder tener la posibilidad de devolver
   * el codigo html o un json con el listado de los numero de fichas diponibles.
   * Hay dos posibilidades: Cuando damos de alta un socio podemos en el text box de ficha dinamicamente
   * sugerir un numero de ficha diponible, sino con el popover llamar mediante ajax la lista de fichas.
   *
   * @return response html o json
   */
  public function action_fichas_disponibles()
  {

    if ($this->request->is_ajax())
    {
      $this->request->headers('Content-type','application/json; charset='.Kohana::$charset);
      $this->response->body(Helper_Fichas::fichas_disponibles_popup());
    }
    else
    {
      // Listamos
      // $collection_arr = Model_Socio::listar_fichas_disponibles();
      // Metodo para buscar las fichas disponibles con una consulta en la DB
      $collection = Model_Ficha::listar_disponibles();
      $this->template->content = View::factory('socios/fichasdisp')
      // Pasamos la variable collection con todos los registros traidos
        ->bind('collection',$collection);
      $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Socios',array('Fichas Disponibles','active')));
    }
  }

  /**
   * Ver Socio
   * @return void
   */
  public function action_ver()
  {
    $socio = ORM::factory('Socio', $this->request->param('id'));
    if ($socio->loaded())
    {
      $persona = $socio->persona;
      $plan_de_cuenta = $persona->plan_de_cuenta;
      $lineas_cuentas_corrientes = $plan_de_cuenta->lineas_cuentas_corrientes->find_all();
      $this->template->content = View::factory('socios/ver')
      ->bind('socio',$socio)
      ->bind('persona',$persona)
      ->bind('plan_de_cuenta',$plan_de_cuenta)
      ->bind('lineas_cuentas_corrientes',$lineas_cuentas_corrientes);
      $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Socios','Ver',array($socio->id,'active')));
    }
    else
    {
      $this->redirect('socios/index');
    }
  }
}