<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Socio extends Model_Persona {
  public function rules()
  {
    $rules = parent::rules();

    // Atributos espeicificos de socio
    $socios_rules = array(
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
    );
    $rules = array_merge($rules, $socios_rules);
    return $rules;
  }
}