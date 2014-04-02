<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_PlanDeCuenta extends Model_ORM_Template {
  protected $_belongs_to = array('socio' => array('foreign_key' => 'socio_id'),'tipo_plan_de_cuenta' => array('foreign_key' => 'socio_id'));
  protected $_has_many = array('lineas_ctas_corriente' => array('foreign_key' => 'plan_de_cuenta_id'));
  protected $_table_name = 'plan_de_cuenta';

  public function rules()
  {
    // Atributos
    return array(
      'fecha_adelante' => array(
        array('date'),
      ),
      'fecha_atras' => array(
        array('date'),
      ),
    );
  }
}