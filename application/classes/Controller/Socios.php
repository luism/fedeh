<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Socios extends Controller_Template_Base
{

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
    </ol>";;
  }

  public function action_new()
  {
    // Mostramos formulario para nuevo rol
    $this->template->content = View::factory('socios/new');

  }

  public function action_create()
  {
    // Creamos y guardamos el rol
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