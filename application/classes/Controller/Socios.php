<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Socios extends Controller_Template_Base
{

  public function before(){
    parent::before();
    // Podria verificar el ROl del usuario y mostrar una panta que 
    // que informe que no está autorizado a ver este recurso
  }

  public function action_index()
  {

    // Listamos
    $socios = ORM::factory('Persona');
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
    if (isset($_POST) && Valid::not_empty($_POST)) {
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
        // Instanciamos una persona
        $persona = ORM::factory('Persona');
        $persona->values(array(
            'nombre' => $post['nombre'],
            'apellido' => $post['apellido'],
            'domicilio_personal'=>$post['domicilio_personal'],
            'email'=>$post['email'],
            'telefono'=>$post['telefono'],
          )
        );
        // Instanciamos un socio
        $socio = ORM::factory('Socio');
        // Agregamos los datos al modelo instanciado
        $socio->values(array(
            'tipo_documento' => $post['tipo_documento'],
            'nro_documento' => $post['nro_documento'],
            'domicilio_laboral' => $post['domicilio_laboral'],
            'fecha_nacimiento' => $post['fecha_nacimiento'],
            'tipo_aporte' => $post['tipo_aporte'],
            'descuento_planilla' => $post['descuento_planilla'],
          )
        );
        try {
          $persona->save();
          try{
            $socio->values(array('personas_id' => $persona->id));
            $socio->save();
            // ver a donde redireccionamos
            $this->redirect('socios/index');
          }
          catch (ORM_Validation_Exception $e){
            $errors = $e->errors('socio');
          }          
        } catch (ORM_Validation_Exception $e) {
          $errors = $e->errors('persona');          
        }
      }
      else
      {
        $errors = $post->errors('socio');
      }
    }

    // Listado de tipos de aporte
    $tipos_aportes = array('mensual' => 'Mensual','trimestral' => 'Trimestral','semestral' => 'Semestral','anual' => 'Anual',);
    // Mostramos formulario para nuevo rol
    $this->template->content = View::factory('socios/new')
         ->bind('post', $post)
         ->bind('tipos_aportes', $tipos_aportes)
         ->bind('errors', $errors);
  }

  public function update()
  {
    // Actualizamos el rol
  }

  public function delete()
  {
    // Borramos el rol
  }
}