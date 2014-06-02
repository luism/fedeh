<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Modelo Plan de Cuenta.
 */
class Model_PlanDeCuenta extends Model_ORM_Template {
  protected $_belongs_to = array(
    'persona' => array(
      'foreign_key' => 'persona_id'
    ),
    'tipo_plan_de_cuenta' => array(
      'model' => 'TipoPlanDeCuenta',
      'foreign_key' => 'tipo_plan_de_cuentas_id'
    )
  );
  protected $_has_many = array(
    'lineas_cuentas_corrientes' => array(
      'model' => 'LineaCuentaCorriente',
      'foreign_key' => 'plan_de_cuenta_id'
    )
  );
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
  public function generar_cuotas($monto=10, $cuotas=12)
  {
    $tipo_linea_cc_id = $this->dame_tipo_linea_cc('efectivo debito')->id;
    # Iteramos para el numero de cuptas
    for ($i=1; $i <= $cuotas ; $i++) {

      $cuota = new Model_LineaCuentaCorriente();
      $cuota->plan_de_cuenta_id = $this->id;
      $cuota->debe = $monto * (-1);
      $cuota->detalle = 'cuota';
      $cuota->tipo_cuenta_corriente_id = $tipo_linea_cc_id;
      # TODO: generar fechas de vencimientos para las cuotas.
      $cuota->fecha_cta_cte = date('Y-m-d',strtotime('+' . ($i-1) . 'months'));
      $cuota->save();
    }
  }

  /**
   * Buscar el id del tipo de linea de cc
   * @return [type] [description]
   */
  public function dame_tipo_linea_cc($tipo = NULL)
  {
    $tipo_linea_cc = ORM::factory('TipoCuentaCorriente');
    $tipo_linea_cc->where('tipocuenta', '=', $tipo)->find();
    return $tipo_linea_cc;
  }

  /**
  *MEtodo para generar cuotas de un judicial
  *@return this Retorna un plan de cuenta
  */
  public function generar_cuotasjudiciales($monto=10, $cuotas)
  {
    $tipo_linea_cc_id = $this->dame_tipo_linea_cc('efectivo debito')->id;
    # Iteramos para el numero de cuotas
    echo $monto;
    for ($i=1; $i <= $cuotas ; $i++) {

      $cuota = new Model_LineaCuentaCorriente();
      $cuota->plan_de_cuenta_id = $this->id;
      $cuota->debe = $monto * (-1);
      $cuota->detalle = 'cuota';
      $cuota->tipo_cuenta_corriente_id = $tipo_linea_cc_id;
      # TODO: generar fechas de vencimientos para las cuotas.
      $cuota->fecha_cta_cte = date('Y-m-d',strtotime('+' . ($i-1) . 'months'));
      $cuota->save();
    }
  }

}