<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cuentas extends Controller_Template_Base {

    public function before(){
        parent::before();
        // Fix manual para fechas:
        if(isset($_POST['fecha_comprobante']))
            $_POST['fecha_comprobante'] = Helper_Date::format($_POST['fecha_comprobante'], Helper_Date::DATE_EN);
        if(isset($_POST['fecha_cta_cte']))
            $_POST['fecha_cta_cte'] = Helper_Date::format($_POST['fecha_cta_cte'], Helper_Date::DATE_EN);
    }

    public function action_nuevo_pago()
    {
        $pago = ORM::factory('LineaCuentaCorriente');
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
                # Buscamos la persona
                $persona = ORM::factory('Persona',$post['persona_id']);
                # TODO: Generar el pago en un método
                #$persona->acreditar_pago($post);                
                
                # Buscamos la cuenta si no la tiene la creamos
                # TODO: Chequear que tenga cuenta
                $cuenta = $persona->plan_de_cuenta;
                # Creamos un nuevo pago
                $pago->values($post->as_array());
                $pago->tipo_cuenta_corriente_id = $cuenta->dame_tipo_linea_cc(Helper_TipoLineaCC::EC);
                $pago->plan_de_cuenta_id = $cuenta->id;
                // print_r($post->as_array());
                // exit();
                $pago->save();
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
            ->select(array(Db::expr('CONCAT(apellido,", ",nombre)'),'nombre_completo'))
            ->order_by('apellido')
            ->order_by('nombre')
            ->find_all()
            ->as_array('id','nombre_completo');
        $this->template->content = View::factory('cuentas/nuevo_pago')
            ->bind('errors',$errors)
            ->bind('pago', $pago)
            ->bind('personas',$personas)
            ->bind('tipo_id',$data['tipo_id'])
            ->bind('tipo_arr', $tipo_arr);
        $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Cuentas',array('Nuevo Pago','active')));
    }

    public function action_balance()
    {
        // $query_socio_debe_total = "call sp_socios_debe();";
        // $query_socio_haber_total = "call sp_socios_haber();";
        // $query_socio_total = "call sp_socios_total();";
        // $socio_debe_total = DB::query(Database::SELECT, $query_socio_debe_total)->execute()->as_array();
        // $socio_haber_total = DB::query(Database::SELECT, $query_socio_haber_total)->execute()->as_array();
        // $socio_total = DB::query(Database::SELECT, $query_socio_total)->execute()->as_array();

        // Socios
        $query_socio_debe_total = "SELECT SUM(debe) as debe_total FROM personas p JOIN socios s ON p.id = s.persona_id JOIN plan_de_cuenta pc ON p.id = pc.persona_id JOIN lineas_ctas_corrientes lcc ON pc.id = lcc.plan_de_cuenta_id WHERE lcc.tipo_cuenta_corriente_id=1;";
        $query_socio_haber_total = "SELECT SUM(haber) as haber_total FROM personas p JOIN socios s ON p.id = s.persona_id JOIN plan_de_cuenta pc ON p.id = pc.persona_id JOIN lineas_ctas_corrientes lcc ON pc.id = lcc.plan_de_cuenta_id WHERE lcc.tipo_cuenta_corriente_id=2;";
        $query_socio_total = "SELECT SUM(haber)+SUM(debe) as total FROM personas p JOIN socios s ON p.id = s.persona_id JOIN plan_de_cuenta pc ON p.id = pc.persona_id JOIN lineas_ctas_corrientes lcc ON pc.id = lcc.plan_de_cuenta_id;";
        $socio_debe_total = DB::query(Database::SELECT, $query_socio_debe_total)->execute()->as_array();
        $socio_haber_total = DB::query(Database::SELECT, $query_socio_haber_total)->execute()->as_array();
        $socio_total = DB::query(Database::SELECT, $query_socio_total)->execute()->as_array();


        // Judiciales
        $query_judicial_debe_total = "SELECT SUM(debe) as debe_total FROM personas p JOIN judiciales j ON p.id = j.persona_id JOIN plan_de_cuenta pc ON p.id = pc.persona_id JOIN lineas_ctas_corrientes lcc ON pc.id = lcc.plan_de_cuenta_id WHERE lcc.tipo_cuenta_corriente_id=1;";
        $query_judicial_haber_total = "SELECT SUM(haber) as haber_total FROM personas p JOIN judiciales j ON p.id = j.persona_id JOIN plan_de_cuenta pc ON p.id = pc.persona_id JOIN lineas_ctas_corrientes lcc ON pc.id = lcc.plan_de_cuenta_id WHERE lcc.tipo_cuenta_corriente_id=2;";
        $query_judicial_total = "SELECT SUM(haber)+SUM(debe) as total FROM personas p JOIN judiciales j ON p.id = j.persona_id JOIN plan_de_cuenta pc ON p.id = pc.persona_id JOIN lineas_ctas_corrientes lcc ON pc.id = lcc.plan_de_cuenta_id;";
        $judicial_debe_total = DB::query(Database::SELECT, $query_judicial_debe_total)->execute()->as_array();
        $judicial_haber_total = DB::query(Database::SELECT, $query_judicial_haber_total)->execute()->as_array();
        $judicial_total = DB::query(Database::SELECT, $query_judicial_total)->execute()->as_array();
        $this->template->content = View::factory('cuentas/balance')
             ->bind('socio_debe_total', $socio_debe_total[0]['debe_total'])
             ->bind('socio_haber_total', $socio_haber_total[0]['haber_total'])
             ->bind('socio_total', $socio_total[0]['total'])
             ->bind('judicial_debe_total', $judicial_debe_total[0]['debe_total'])
             ->bind('judicial_haber_total', $judicial_haber_total[0]['haber_total'])
             ->bind('judicial_total', $judicial_total[0]['total']);
        $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Cuentas', array('Balance', 'active')));
    }

    public function action_nuevo()
    {
        $this->template->content = View::factory('cuentas/nuevo');
        $this->template->breadcrumb = Helper_Application::breadcrumbs(array('Inicio','Cuentas', array('Nuevo', 'active')));
    }
}
