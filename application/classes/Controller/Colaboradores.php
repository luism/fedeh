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
    $colaboradores = ORM::factory('Persona');
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
    if (isset($_POST) && Valid::not_empty($_POST)) {
      // Factory es un patron de diseño, tener en cuenta.
      $post = Validation::factory($_POST)
              ->rule('nombre','not_empty')
              ->rule('apellido','not_empty')
              ->rule('domicilio_personal','not_empty')
              ->rule('email','not_empty')
              ->rule('telefono','not_empty')
              ->rule('fecha_nacimiento','not_empty')
              ->rule('tipo_documento','not_empty')
              ->rule('nro_documento','not_empty');
      if ($post->check()) {
        // Instanciamos una persona
        $persona = ORM::factory('Persona');
        $persona->values(array(
            'nombre' => $post['nombre'],
            'apellido' => $post['apellido'],
            'domicilio_personal'=>$post['domicilio_personal'],
            'email'=>$post['email'],
            'telefono'=>$post['telefono'],
            'grupo_sanguineo'=>['grupo_sanguineo'],
          )
        );
        // Instanciamos un colaborador
        $colaborador = ORM::factory('Colaborador');
        // Agregamos los datos al modelo instanciado
        $colaborador->values(array(
            'fecha_nacimiento' => $post['fecha_nacimiento'],
            'tipo_documento' => $post['tipo_documento'],
            'nro_documento' => $post['nro_documento'],
            )
        );
        try {
          $persona->save();
          try{
            $colaborador->values(array('personas_id' => $persona->id));
            $colaborador->save();
            // ver a donde redireccionamos
            $this->redirect('colaboradores/index');
          }
          catch (ORM_Validation_Exception $e){
            $errors = $e->errors('colaborador');
          }          
        } catch (ORM_Validation_Exception $e) {
          $errors = $e->errors('persona');          
        }
      }
      else
      {
        $errors = $post->errors('colaborador');
      }
    }

    
    // entratamien formulario para nuevo rol
    $this->template->content = View::factory('colaboradores/new')
         ->bind('post', $post)
         ->bind('errors', $errors);
  }

  public function update()
  {
    // Actualizamos el rol
  }

  public function delete()
  {
    // Borramos el colaborador
    $id = $this->request->param('id');
    $user = ORM::factory('Colaborador',$id);
    $persona = $user->persona;
    # TODO agregar control de error al borrar
    $user->delete();
    $persona->delete();
    $this->redirect('colaboradores/index');
  }

  public function action_consulta()
  {

    // Listamos
    $colaboradores = ORM::factory('Persona');
    $collection = $colaboradores->find_all();
    $this->template->content = View::factory('colaboradores/consulta')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Colaboradores</li>
    </ol>";
  }
}