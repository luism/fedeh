<?php defined('SYSPATH') or die('No direct access allowed.');

// EL nombre del modelo debe conicidir con la tabla pero en singular 
class Model_Persona extends ORM {
    protected $_has_one = array('socio' => array('foreign_key' => 'personas_id'));
    //protected $_has_one = array('judicial' => array('foreign_key' => 'personas_id'));
    //protected $_has_one = array('paciente' => array('foreign_key' => 'pacientes_id'));
    //protected $_has_one = array('contacto' => array('foreign_key' => 'contactos_id'));
    //protected $_has_one = array('colaborador' => array('foreign_key' => 'contactos_id'));
    //protected $_has_one = array('empresa' => array('foreign_key' => 'contactos_id'));
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