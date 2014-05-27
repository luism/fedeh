<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cuentas extends Controller_Template_Base
{

    public function before(){
        parent::before();
        // Fix manual para fechas:
        // if(isset($_POST['fecha']))
        //     $_POST['fecha'] = Helper_Date::format($_POST['fecha'], Helper_Date::DATE_EN);
    }

    public function action_nuevo_pago()
    {
        $linea_cc = ORM::factory('LineaCuentaCorriente');
        $tipo_id = NULL;
        // Generamos un array para poder armar un select con las personas
        // disponibles para ingresar un nuevo pago
        $data = ($this->request->method() === Request::POST) ? $this->request->post() : $this->request->query();
        if (isset($_POST) && Valid::not_empty($_POST))
        {
            $post = Validation::factory($_POST)
              ->rule('tipo_id','not_empty')
              ->rule('persona_id','not_empty')
              ->rule('haber','not_empty')
              ->rule('fecha_cta_cte','not_empty');
            if ($post->check())
            {
                $linea_cc->values($post->as_array(),array('detalle','haber','fecha_cta_cte','numero_comprobante','fecha_comprobante'));
                # Buscamos la persona
                $persona = ORM::factory('Persona',$post['persona_id']);
                echo $persona->acreditar_pago($post);

                
                exit();
                # Buscamos la cuenta si no la tiene la creamos

            }
            else
            {
                $errors = $post->errors('LineaCuentaCorriente');
            }
        }

        $tipo_arr = array(
            '' => '-- Seleccione tipo',
            'socio' => 'Socio',
            'judicial' => 'Judicial',
            'contacto' => 'Contacto',
            'empresa' => 'Empresa',
            'paciente' => 'Paciente',
        );
        $personas = ORM::factory('Persona')
            // Con esto
            ->select(array(Db::expr('CONCAT(apellido,", ",nombre)'),'nombre_completo'))
            ->order_by('apellido')
            ->order_by('nombre')
            ->find_all()
            ->as_array('id','nombre_completo');
        $this->template->content = View::factory('cuentas/nuevo_pago')
        ->bind('errors',$errors)
        ->bind('pago', $linea_cc)
        ->bind('personas',$personas)
        ->bind('tipo_id',$data['tipo_id'])
        ->bind('tipo_arr', $tipo_arr);
        $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Cuentas',array('Nuevo Pago','active')));
    }

    public function action_balance()
    {
        $this->template->content = View::factory('cuentas/balance');
        $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Cuentas', array('Balance', 'active')));
    }

    public function action_nuevo()
    {
        $this->template->content = View::factory('cuentas/nuevo');
        $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Cuentas', array('Nuevo', 'active')));
    }
}
