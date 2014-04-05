<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contactos extends Controller_Template_Base
{

  public function before(){
    parent::before();
    // Podria verificar el ROl del usuario y mostrar una panta que 
    // que informe que no está autorizado a ver este recurso
  }

  public function action_index()
  {

    // Listamos
    $contactos = ORM::factory('Persona');
    $collection = $contactos->find_all();
    $this->template->content = View::factory('contactos/index')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Contactos</li>
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
              ->rule('profesion','not_empty');
      if ($post->check()) {
        // Instanciamos una persona
        $persona = ORM::factory('Persona');
        $persona->values(array(
            'nombre' => $post['nombre'],
            'apellido' => $post['apellido'],
            'domicilio_personal'=>$post['domicilio_personal'],
            'email'=>$post['email'],
            'telefono'=>$post['telefono'],
            'donante'=>$post['donante'],
            'grupo_sanguineo'=>['grupo_sanguineo'],
          )
        );
        // Instanciamos un paciente
        $contacto = ORM::factory('Contacto');
        // Agregamos los datos al modelo instanciado
        $contacto->values(array(
            'domicilio_laboral' => $post['domicilio_laboral'],
            'profesion' => $post['profesion'],
            )
        );
        try {
          $persona->save();
          try{
            $contacto->values(array('personas_id' => $persona->id));
            $contacto->save();
            // ver a donde redireccionamos
            $this->redirect('contactos/index');
          }
          catch (ORM_Validation_Exception $e){
            $errors = $e->errors('contacto');
          }          
        } catch (ORM_Validation_Exception $e) {
          $errors = $e->errors('persona');          
        }
      }
      else
      {
        $errors = $post->errors('contacto');
      }
    }

    // entratamien formulario para nuevo contacto
    $this->template->content = View::factory('contactos/new')
         ->bind('post', $post)
         ->bind('errors', $errors);
  }

  public function update()
  {
    // Actualizamos el rol
  }

  public function action_delete()
  {
    // Borramos el contacto
    $id = $this->request->param('id');
    $user = ORM::factory('Contacto',$id);
    $persona = $user->persona;
    # TODO agregar control de error al borrar
    $user->delete();
    $persona->delete();
    $this->redirect('contactos/index');
  }

  public function action_consulta()
  {

    // Listamos
    $contactos = ORM::factory('Persona');
    $collection = $contactos->find_all();
    $this->template->content = View::factory('contactos/consulta')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Contactos</li>
    </ol>";
  }
}