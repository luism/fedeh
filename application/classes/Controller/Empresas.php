<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Empresas extends Controller_Template_Base
{

  public function before(){
    parent::before();
    // Podria verificar el ROl del usuario y mostrar una panta que 
    // que informe que no está autorizado a ver este recurso
  }

  public function action_index()
  {

    // Listamos
    $empresas = ORM::factory('Persona');
    $collection = $empresas->find_all();
    $this->template->content = View::factory('empresas/index')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Empresas</li>
    </ol>";
  }

  public function action_new()
  {
    // Creamos y guardamos el colaborador, pero primero verificar que mando datos:
    if (isset($_POST) && Valid::not_empty($_POST)) {
      // Factory es un patron de diseño, tener en cuenta.
      $post = Validation::factory($_POST)
              ->rule('nombre','not_empty')
              //->rule('apellido','not_empty')
              ->rule('domicilio_personal','not_empty')
              ->rule('email','not_empty')
              ->rule('telefono','not_empty')
              ->rule('rubro','not_empty')
              ->rule('contacto_empresa','not_empty')
              ->rule('cuit','not_empty');
      if ($post->check()) {
        // Instanciamos una persona
        $persona = ORM::factory('Persona');
        $persona->values(array(
            'nombre' => $post['nombre'],
            //'apellido' => $post['apellido'],
            'domicilio_personal'=>$post['domicilio_personal'],
            'email'=>$post['email'],
            'telefono'=>$post['telefono'],
            'grupo_sanguineo'=>['grupo_sanguineo'],
          )
        );
        // Instanciamos un empresa
        $empresa = ORM::factory('Empresa');
        // Agregamos los datos al modelo instanciado
        $empresa->values(array(
            'rubro' => $post['rubro'],
            'contacto_empresa' => $post['contacto_empresa'],
            'cuit' => $post['cuit'],
            )
        );
        try {
          $persona->save();
          try{
            $empresa->values(array('personas_id' => $persona->id));
            $empresa->save();
            // ver a donde redireccionamos
            $this->redirect('empresas/index');
          }
          catch (ORM_Validation_Exception $e){
            $errors = $e->errors('empresa');
          }          
        } catch (ORM_Validation_Exception $e) {
          $errors = $e->errors('persona');          
        }
      }
      else
      {
        $errors = $post->errors('empresa');
      }
    }

    
    // entratamien formulario para nuevo rol
    $this->template->content = View::factory('empresas/new')
         ->bind('post', $post)
         ->bind('errors', $errors);
  }

  public function update()
  {
    // Actualizamos el rol
  }

  public function delete()
  {
    // Borramos la empresa
    $id = $this->request->param('id');
    $user = ORM::factory('Empresa',$id);
    $persona = $user->persona;
    # TODO agregar control de error al borrar
    $user->delete();
    $persona->delete();
    $this->redirect('empresas/index');
  }
}