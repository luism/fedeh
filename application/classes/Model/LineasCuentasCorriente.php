<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_LineaCuentaCorriente extends Model_ORM_Template {
  protected $_belongs_to = array('tipo_cuenta_corriente' => array('foreign_key' => 'tipo_cuenta_corriente_id'),
    'plan_de_cuenta' => array('foreign_key' => 'plan_de_cuenta_id'));
  protected $_table_name = 'lineas_ctas_corrientes';

  public function rules()
  {
    // Atributos
    return array(
      'fecha_cta_cte' => array(
        array('date'),
      ),
      'detalle' => array(),
      'debe' => array(),
      'haber' => array(),
      'numero_comprobante' => array(),
      'fecha_comprobante' => array(
        array('date'),
      ),
      'numero_cheque' => array(),
      'tipo_cheque' => array(),
      'banco_cheque' => array(),
      'fecha_cobro_cheque' => array(
        array('date'),
      ),
      'fecha_vencimiento_cheque' => array(
        array('date'),
      ),
    );
  }
}











