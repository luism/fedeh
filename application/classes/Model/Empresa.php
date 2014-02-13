<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Empresa extends Model_Persona {
  public function rules(){
    $rules = parent::rules();

    // Atributos espeicificos de empresa
    $empresas_rules = array(
      'rubro' => array(
        array('not_empty'),
        array('max_length', array(':value', 45)),
      ),
      'contacto_empresa' => array(
        array('not_empty'),
        array('max_length', array(':value', 45)),
      ),
      'cuit' => array(
        array('not_empty'),
        array('max_length', array(':value', 45)),
      ),
    );
    return array_merge($rules, $empresas_rules);
  }
}