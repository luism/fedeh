<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Colaborador extends Model_Persona {
  protected $_belongs_to = array('persona' => array('foreign_key' => 'persona_id'));
  protected $_has_many = array('fichas' => array('foreign_key' => 'colaborador_id'));
  protected $_table_name = 'colaboradores'; 

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

  public static function lista_colaboradores()
  {
    $lista_colaboradores = array();
    $colaboradores = ORM::factory('Colaborador');
    $collection = $colaboradores->find_all();
    foreach ($collection as $colaborador) {
      $lista_colaboradores[$colaborador->id] = $colaborador->persona->nombre;
    }
    return $lista_colaboradores;
  }
}