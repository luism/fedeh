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
        if (isset($data['entidad'])) {
            switch ($data['entidad']) {
                case 'socio':
                    $personas = ORM::factory('Persona')
                        ->select(array(Db::expr('CONCAT(apellido,", ",nombre)'),'nombre_completo'))
                        ->join('socios')
                        ->on('persona.id','=','socios.persona_id')
                        ->where('socios.deshabilitado','=',0)
                        ->and_where_open()
                            ->where('nombre','LIKE',"%$string%")
                            ->or_where('apellido', 'like',"%$string%")
                        ->and_where_close()
                        ->order_by('apellido')
                        ->order_by('nombre')
                        ->find_all()
                        ->as_array('id','nombre_completo');
                    break;
                
                case 'judicial':
                    $personas = ORM::factory('Persona')
                        ->select(array(Db::expr('CONCAT(apellido,", ",nombre)'),'nombre_completo'))
                        ->join('judiciales')
                        ->on('persona.id','=','judiciales.persona_id')
                        ->where('nombre','LIKE',"%$string%")
                        ->or_where('apellido', 'like',"%$string%")
                        ->order_by('apellido')
                        ->order_by('nombre')
                        ->find_all()
                        ->as_array('id','nombre_completo');
                    break;
                case 'contacto':
                    $personas = ORM::factory('Persona')
                        ->select(array(Db::expr('CONCAT(apellido,", ",nombre)'),'nombre_completo'))
                        ->join('contactos')
                        ->on('persona.id','=','contactos.persona_id')
                        ->where('nombre','LIKE',"%$string%")
                        ->or_where('apellido', 'like',"%$string%")
                        ->order_by('apellido')
                        ->order_by('nombre')
                        ->find_all()
                        ->as_array('id','nombre_completo');
                    break;
                case 'empresa':
                    $personas = ORM::factory('Persona')
                        ->select(array(Db::expr('CONCAT(apellido,", ",nombre)'),'nombre_completo'))
                        ->join('empresas')
                        ->on('persona.id','=','empresas.persona_id')
                        ->where('nombre','LIKE',"%$string%")
                        ->or_where('apellido', 'like',"%$string%")
                        ->order_by('apellido')
                        ->order_by('nombre')
                        ->find_all()
                        ->as_array('id','nombre_completo');
                    break;
                case 'paciente':
                    $personas = ORM::factory('Persona')
                        ->select(array(Db::expr('CONCAT(apellido,", ",nombre)'),'nombre_completo'))
                        ->join('pacientes')
                        ->on('persona.id','=','pacientes.persona_id')
                        ->where('nombre','LIKE',"%$string%")
                        ->or_where('apellido', 'like',"%$string%")
                        ->order_by('apellido')
                        ->order_by('nombre')
                        ->find_all()
                        ->as_array('id','nombre_completo');
                    break;
                default:
                    $personas = ORM::factory('Persona')
                        ->select(array(Db::expr('CONCAT(apellido,", ",nombre)'),'nombre_completo'))
                        ->where('nombre','LIKE',"%$string%")
                        ->or_where('apellido', 'like',"%$string%")
                        ->order_by('apellido')
                        ->order_by('nombre')
                        ->find_all()
                        ->as_array('id','nombre_completo');
                    break;
            }
        }
        if ($this->request->is_ajax())
        {
            echo json_encode($personas);
            exit();
        }
        else
        {
        }
    }
}