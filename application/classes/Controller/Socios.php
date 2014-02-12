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
    // Agrego un comentario
    // Este es un comentario de cristian

    $socios = ORM::factory('Socio');
    $collection = $roles->find_all();
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
    // Mostramos formulario para nuevo rol
    $this->template->content = View::factory('socios/new');

  }

  public function action_create()
  {
    // Creamos y guardamos el socio

    // Primero verificar que mando datos:
    if (isset($_POST) && Valid::not_empty($_POST)) {

      // Factory es un patron de diseño, tener en cuenta.
      $post = Validation::factory($_POST)
              ->rule('nombre','not_empty');
              ->rule('apellido','not_empty')
              ->rule('domicilio_personal','not_empty')
              ->rule('email','not_empty')
              ->rule('telefono','not_empty');

      if ($post->check()) {
        // Instanciamos un socio
        $socio = ORM::factory('Socio');
        // Agregamos los datos al modelo instanciado
        $socio->values(array(
            'nombre' => $post['nombre'],
          )
        );


        try{
          $socio->save();
          // ver a donde redireccionamos
          $this->redirect('socios/index');
        }
        catch (ORM_Validation_Exception $e){
          $errors = $post->errors('Socio');
        }
      }
    }

    // redireccionar al fomrulario si da error
    $session->set('socio',$socio);
    $session->set('errors',$errors);
    $this->redirect('socios/new');

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