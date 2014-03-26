<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Judiciales extends Controller_Template_Base
{
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
    $judiciales = ORM::factory('Persona');
    $collection = $judiciales->find_all();
    $this->template->content = View::factory('judiciales/index')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Judiciales</li>
    </ol>";
  }

  public function action_new()
  {
    // Creamos y guardamos el socio judicial, pero primero verificar que mando datos:
    if (isset($_POST) && Valid::not_empty($_POST)) {
      // Factory es un patron de diseño, tener en cuenta.
      $post = Validation::factory($_POST)
              ->rule('nombre','not_empty')
              ->rule('apellido','not_empty')
              ->rule('domicilio_personal','not_empty')
              ->rule('email','not_empty')
              ->rule('telefono','not_empty');
              
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
            'grupo_sanguineo'=>$post['grupo_sanguineo'],
            )
        );
        // Instanciamos un socio
        $judicial = ORM::factory('Judicial');
        // Agregamos los datos al modelo instanciado
        $judicial->values(array(
            'numero_oficio' => $post['numero_oficio'],
            'fecha_oficio' => $post['fecha_oficio'],
            'causa' => $post['causa'],
            'juzgado' => $post['juzgado'],
            'cantidad_cuotas' => $post['cantidad_cuotas'],
            'monto_cuotas' => $post['monto_cuotas'],
          )
        );
        try {
          $persona->save();
          try{
            $judicial->values(array('personas_id' => $persona->id));
            $judicial->save();
            // ver a donde redireccionamos
            $this->redirect('judiciales/index');
          }
          catch (ORM_Validation_Exception $e){
            $errors = $e->errors('judicial');
          }          
        } catch (ORM_Validation_Exception $e) {
          $errors = $e->errors('persona');          
        }
      }
      else
      {
        $errors = $post->errors('judicial');
      }
    }

    // Mostramos formulario para nuevo rol
    $this->template->content = View::factory('judiciales/new')
         ->bind('post', $post)
         //->bind('tipos_aportes', $tipos_aportes)
         ->bind('errors', $errors);
  }

  public function update()
  {
    // Actualizamos el rol
  }

  public function delete()
  {
    // Borramos el socio judicial
    $id = $this->request->param('id');
    $user = ORM::factory('Judicial',$id);
    $persona = $user->persona;
    # TODO agregar control de error al borrar
    $user->delete();
    $persona->delete();
    $this->redirect('judiciales/index');
  }
}