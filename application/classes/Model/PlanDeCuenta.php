<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Modelo Plan de Cuenta.
 */
class Model_PlanDeCuenta extends Model_ORM_Template {
  protected $_belongs_to = array(
    'persona' => array('foreign_key' => 'persona_id'),
    'tipo_plan_de_cuenta' => array(
      'model' => 'TipoPlanDeCuenta',
      'foreign_key' => 'tipo_plan_de_cuentas_id'
    )
  );
  protected $_has_many = array('lineas_cuentas_corriente' => array('foreign_key' => 'plan_de_cuenta_id'));
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

  /**
   * Método para generar cuotas de una cuenta
   * @return this Retorna un plan de cuenta
   */
  public function generar_cuotas(float $monto, int $cuotas, int $vencimiento)
  {
    for ($i=1; $i < $cuotas ; $i++) {
      $tipo_linea_cc = ORM::factory('LineasCuentasCorriente');
      $tipo_linea_cc->where('tipocuenta', '=', 'efectivo debito');
      $cuota = new Model_LineasCuentasCorriente();
      $cuota->debe = $monto;
      $cuota->detalle = 'cuota';
      $cuota->tipo_cuenta_corriente_id = $tipo_linea_cc->id;
      # TODO: generar fechas de vencimientos para las cuotas.
      # $cuota->fecha_cta_cte = $fecha_vencimiento
    }
  }
}