<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Controlador de Fichas
 */
class Controller_Fichas extends Controller_Template_Base{

    public function action_historial()
    {
        $id = $this->request->param('id');
        $ficha = ORM::factory('Ficha',$id);
        $historial = $ficha->historial->find_all();
        $this->template->content = View::factory('fichas/historial')
            ->bind('ficha',$ficha)
            ->bind('historial',$historial);
        $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Socios','Fichas',array('Historial','active')));

    }
}
