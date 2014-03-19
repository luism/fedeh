<?php defined('SYSPATH') or die('No direct access allowed.');

// EL nombre del modelo debe conicidir con la tabla pero en singular 
class Model_Persona extends Model_ORM_Template {
    protected $_has_one = array(
        'socio' => array('foreign_key' => 'persona_id'),
        'judicial' => array('foreign_key' => 'persona_id'),
        'paciente' => array('foreign_key' => 'persona_id'),
        'contacto' => array('foreign_key' => 'persona_id'),
        'colaborador' => array('foreign_key' => 'persona_id'),
        'empresa' => array('foreign_key' => 'persona_id'),
    );
    public function rules()
    {
        return array(
            // Aca van los atributos que coniciden con los de la tabla EXACTO y siempre en minusculas
            'nombre' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
            ),
            'apellido' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
            ),
            'domicilio_personal' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
            ),
            'email' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
                //array('email'),
            ),
            'telefono' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
            ),
            'donante' => array(
                //ver como validar
                // array('digit'),
            ),
            'grupo_sanguineo' => array(
                array('max_length', array(':value', 45)),
            ),
        );
    }
}