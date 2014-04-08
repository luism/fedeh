<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Modelo de Tipo de Linea de Cuentea.
 * 
 * Este nos define el tipo de linea de cuenta corriente o de plan de cuenta.
 * Los tipos de linea de cuenta corriente pueden ser:
 *   - Efectivo debito
 *   - efectivo credito
 *   - cheque debito
 *   - cheque credito
 *   - donacion efectivo
 *   - donacion cheque
 */
class Model_TipoCuentaCorriente extends ORM {
  protected $_table_name = 'tipos_cuentas_corrientes';
  protected $_has_many = array('lineas_ctas_corriente' => array('foreign_key' => 'tipo_cuenta_corriente_id'));


}