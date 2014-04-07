<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Empresa extends Model_Persona {
  protected $_belongs_to = array('persona' => array('foreign_key' => 'persona_id'));
  public function rules()
  {
    // Atributos espeicificos de empresa
    return array(
      'rubro' => array(
        array('not_empty'),
        array('max_length', array(':value', 45)),
      ),
      'nombre_empresa' => array(
        array('not_empty'),
        array('max_length', array(':value', 45)),
      ),
      'cuit' => array(
        array('not_empty'),
        array('max_length', array(':value', 45)),
      ),
    );
  }
}