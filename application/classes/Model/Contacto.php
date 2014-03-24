<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Contacto extends Model_Persona {
  protected $_belongs_to = array('persona' => array('foreign_key' => 'persona_id'));
  public function rules(){
    $rules = parent::rules();

    // Atributos espeicificos de contactos
    return array(
      'domicilio_laboral' => array(
        array('max_length', array(':value', 45)),
      ),
      'profesion' => array(
        array('not_empty'),
        array('max_length', array(':value', 45)),
      ),
    );
  }
}