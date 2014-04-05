<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Judicial extends Model_Persona {
  protected $_belongs_to = array('persona' => array('foreign_key' => 'persona_id'));
  protected $_table_name = 'judiciales';

  public function rules()
  {
    // Atributos espeicificos de judicial
    return array(
      'numero_oficio' => array(
        array('not_empty'),
      ),
      'fecha_oficio' => array(
        array('not_empty'),
        array('date'),
      ),
      'causa' => array(
        array('not_empty'),
        array('max_length', array(':value', 45)),
      ),
      'juzgado' => array(
        array('not_empty'),
        array('max_length', array(':value', 45)),
      ),
      'cantidad_cuotas' => array(
        array('not_empty'),
      ),
      'monto_cuotas' => array(
        array('not_empty'),
      ),
    );
  }
}