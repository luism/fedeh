<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Roles extends Controller_Template_Base
{

  public function action_index()
  {
    // Listamos los roles
    $roles = ORM::factory('Rol');
    $collection = $roles->find_all();
    $this->template->content = View::factory('roles/index')
    // Pasamos la variable collection con todos los registros traidos
         ->bind('collection',$collection);
  }

  public function action_new()
  {
    // Mostramos formulario para nuevo rol
    $this->template->content = View::factory('roles/new');

  }

  public function action_create()
  {
    // Creamos y guardamos el rol
    $this->template->content = View::factory('roles/new');
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