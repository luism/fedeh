<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Modelo de Tipo de Plan de Cuentea
 * Estos tipos pueden ser:
 *   - Socio
 *   - Judicial
 *   - Donacion
 */
class Model_TipoPlanDeCuenta extends ORM {
  protected $_table_name = 'tipos_plan_cuentas';
  protected $_has_many = array('plan_de_cuentas' => array('foreign_key' => 'tipos_plan_cuentas_id'));
}