<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Controlador de Fichas
 */
class Controller_Fichas extends Controller_Template_Base{

    public function action_historial()
    {
        $id = $this->request->param('id');
        $ficha = ORM::factory('Ficha');
        
    }
}
