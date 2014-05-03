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
        if (isset($_POST) && Valid::not_empty($_POST))
        {
            $post = Validation::factory($_POST)
              ->rule('detalle','not_empty')
              ->rule('haber','not_empty')
              ->rule('numero_comprobante','not_empty')
              ->rule('fecha_cta_cte','not_empty');
            if ($post->check())
            {
                $linea_cc->values($post_>as_array(),array('detalle','haber','fecha_cta_cte',))
            }

        }
        $this->template->content = View::factory('cuentas/nuevo_pago')
        ->bind('pago', $linea_cc);
        $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio',array('Socios','active')));
    }

    public function action_pago()
    {
    }

    public function action_balance()
    {
    }
}
