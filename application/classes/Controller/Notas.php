<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Notas extends Controller_Template_Base
{

  
  public function action_index()
  {

    // Listamos
   
    $notas = ORM::factory('Nota');
    $collection = $notas->find_all();
    $this->template->content = View::factory('notas/index')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
    $this->template->breadcrumb = "
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"active\">Notas</li>
    </ol>";
  }

  public function action_new()
  {
  
    if (isset($_POST) && Valid::not_empty($_POST)) {

      // Factory es un patron de diseño, tener en cuenta.
      $post = Validation::factory($_POST)
              ->rule('motivo','not_empty')
              ->rule('fecha_nota','not_empty')
              ->rule('dirigida_a','not_empty');

      if ($post->check()) {
        // Instanciamos una nota
        $nota = ORM::factory('Nota');
        // Agregamos los datos al modelo instanciado
        $nota->values(array(
            'motivo' => $post['motivo'],
            'fecha_nota' => $post['fecha_nota'],
            'dirigida_a' => $post['dirigida_a'],
            'expte_generado' => $post['expte_generado'],
            'entidad_expte' => $post['entidad_expte'],
            'fecha_expte' => $post['fecha_expte'],
          )
        );


        try{
          $nota->save();
          // ver a donde redireccionamos
          $this->redirect('notas/index');
        }
        catch (ORM_Validation_Exception $e){
          $errors = $e->errors('nota');
        }
      }
    }

    // redireccionar al fomrulario si da error
    //$session->set('nota',$nota);
    //$session->set('errors',$errors);
    //$this->redirect('notas/new');
    $this->template->content = View::factory('notas/new')
         ->bind('post', $post)
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