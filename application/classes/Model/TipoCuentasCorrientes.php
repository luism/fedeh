<?php defined('SYSPATH') or die('No direct access allowed.');


class Model_TipoCuentaCorriente extends Model_ORM_Template {
  protected $_table_name = 'tipos_cuentas_corrientes';
  protected $_has_many = array('lineas_ctas_corriente' => array('foreign_key' => 'tipocuenta_id'));


}