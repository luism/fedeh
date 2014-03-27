<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Pacientes extends Controller_Template_Base
{

  public function before(){
    parent::before();
    // Podria verificar el ROl del usuario y mostrar una panta que 
    // que informe que no está autorizado a ver este recurso
  }

  public function action_index()
  {

    // Listamos
    $pacientes = ORM::factory('Persona');
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
    if (isset($_POST) && Valid::not_empty($_POST)) {
      // Factory es un patron de diseño, tener en cuenta.
      $post = Validation::factory($_POST)
              ->rule('nombre','not_empty')
              ->rule('apellido','not_empty')
              ->rule('domicilio_personal','not_empty')
              ->rule('email','not_empty')
              ->rule('telefono','not_empty')
              ->rule('estado','not_empty');
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
        // Instanciamos un paciente
        $paciente = ORM::factory('Paciente');
        // Agregamos los datos al modelo instanciado
        $paciente->values(array(
            'estado' => $post['estado'],
            )
        );
        try {
          $persona->save();
          try{
            $paciente->values(array('personas_id' => $persona->id));
            $paciente->save();
            // ver a donde redireccionamos
            $this->redirect('pacientes/index');
          }
          catch (ORM_Validation_Exception $e){
            $errors = $e->errors('paciente');
          }          
        } catch (ORM_Validation_Exception $e) {
          $errors = $e->errors('persona');          
        }
      }
      else
      {
        $errors = $post->errors('paciente');
      }
    }

    // Listado de estados de pacientes
    $estado = array('activo' => 'Activo','no_activo' => 'No activo','en_tratamiento' => 'En tratamiento',);
    // entratamien formulario para nuevo rol
    $this->template->content = View::factory('pacientes/new')
         ->bind('post', $post)
         ->bind('estado', $estado)
         ->bind('errors', $errors);
  }

  public function update()
  {
    // Actualizamos el rol
  }

  public function delete()
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

    // Listamos
    $pacientes = ORM::factory('Persona');
    $collection = $pacientes->find_all();
    $this->template->content = View::factory('pacientes/consulta')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Pacientes</li>
    </ol>";
  }
}