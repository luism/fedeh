<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Colaborador extends Model_Persona {
  public function rules(){
    $rules = parent::rules();

    // Atributos espeicificos de socio
    $colaboradores_rules = array(
      'fecha_nacimiento' => array(
        array('not_empty'),
        array('date'),
      ),
      'tipo_documento' => array(
        array('not_empty'),
        array('max_length', array(':value', 45)),
      ),
      'nro_documento' => array(
        array('not_empty'),
        array('max_length', array(':value', 45)),
      ),
    );
    return array_merge($rules, $colaboradores_rules);
  }
}