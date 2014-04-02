<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Socio extends Model_ORM_Template {
  protected $_belongs_to = array('persona' => array('foreign_key' => 'persona_id'));
  protected $_has_one = array(
      'plan_de_cuenta' => array('foreign_key' => 'socio_id'),
  );
  public function rules()
  {
    // Atributos espeicificos de socio
    return array(
      'tipo_documento' => array(
        array('not_empty'),
        array('max_length', array(':value', 45)),
      ),
      'nro_documento' => array(
        array('not_empty'),
        array('max_length', array(':value', 45)),
      ),
      'domicilio_laboral' => array(
        array('max_length', array(':value', 45)),
      ),
      'fecha_nacimiento' => array(
        array('not_empty'),
        array('date'),
      ),
      'tipo_aporte' => array(
        array('not_empty'),
        array('max_length', array(':value', 45)),
      ),
      'descuento_planilla' => array(
        // Ver como validamos...
        // array('digit'),
      ),
      'numero_ficha' => array(
      ),
      'monto' => array(
      ),      
    );
  }

  public function generar_cuenta()
  {
    $cuenta = ORM::factory('PlanDeCuenta');
    if ($this->monto)
    {
      # Generamos las lineas de cuenta
    }
    $cuenta->save();
  }
}