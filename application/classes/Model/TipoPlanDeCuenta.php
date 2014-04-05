<?php defined('SYSPATH') or die('No direct access allowed.');


class Model_TipoPlanDeCuenta extends Model_ORM_Template {
  protected $_table_name = 'tipos_plan_cuentas';
  protected $_has_many = array('plan_de_cuentas' => array('foreign_key' => 'tipos_plan_cuentas_id'));
}