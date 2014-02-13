<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Contacto extends Model_Persona {
  public function rules(){
    $rules = parent::rules();

    // Atributos espeicificos de socio
    $contactos_rules = array(
      'domicilio_laboral' => array(
        array('not_empty'),
        array('max_length', array(':value', 45)),
      ),
      'profesion' => array(
        array('not_empty'),
        array('max_length', array(':value', 45)),
      ),
    );
    return array_merge($rules, $contactos_rules);
  }
}