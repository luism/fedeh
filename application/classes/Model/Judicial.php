<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Judicial extends Model_Persona {
  public function rules(){
    $rules = parent::rules();

    // Atributos espeicificos de socio
    $judiciales_rules = array(
      'numero_oficio' => array(
        array('not_empty'),
        //como valido int
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
    );
    return array_merge($rules, $judiciales_rules);
  }
}