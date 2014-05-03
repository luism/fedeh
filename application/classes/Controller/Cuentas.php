<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cuentas extends Controller_Template_Base
{

    public function before(){
        parent::before();
        // Fix manual para fechas:
        // if(isset($_POST['fecha']))
        //     $_POST['fecha'] = Helper_Date::format($_POST['fecha'], Helper_Date::DATE_EN);
    }

    public function action_nuevo()
    {
    }

    public function action_pago()
    {
    }

    public function action_balance()
    {
    }
}
