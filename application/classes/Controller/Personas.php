<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Personas extends Controller_Template_Base {

    public function before()
    {
        parent::before();
        // Fix manual para fechas:
        // if(isset($_POST['fecha']))
        //     $_POST['fecha'] = Helper_Date::format($_POST['fecha'], Helper_Date::DATE_EN);
    }

    public function action_buscar()
    {
        $data = ($this->request->method() === Request::POST) ? $this->request->post() : $this->request->query();
        $string = (isset($data['string'])) ? $data['string'] : '';
        $nombre = (isset($data['nombre'])) ? $data['nombre'] : '';
        $apellido = (isset($data['apellido'])) ? $data['apellido'] : '';
        $personas = ORM::factory('Persona')
            ->select(array(Db::expr('CONCAT(apellido,", ",nombre)'),'nombre_completo'))
            ->where('nombre','LIKE',"%$string%")
            ->or_where('apellido', 'like',"%$string%")
            ->order_by('apellido')
            ->order_by('nombre')
            ->find_all()
            ->as_array('id','nombre_completo');
        if ($this->request->is_ajax())
        {
        }
        else
        {
        }
        print_r($personas);
        echo '<br />';
        echo json_encode($personas);
        echo '<br />';
        print_r($data);
        exit();
    }
}