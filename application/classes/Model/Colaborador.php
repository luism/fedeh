<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Colaborador extends Model_Persona {
  protected $_belongs_to = array('persona' => array('foreign_key' => 'personas_id'));
  public function rules()
  {
    // Atributos espeicificos de socio
    return array(
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
  }
}