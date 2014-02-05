<?php defined('SYSPATH') or die('No direct access allowed.');

// EL nombre del modelo debe conicidir con la tabla pero en singular 
class Model_Persona extends ORM {
 
    public function rules()
    {
        return array(
            // Aca van los atributos que coniciden con los de la tabla EXACTO y siempre en minusculas
            'nombre' => array(
                array('not_empty'),
                // array('min_length', array(':value', 4)),
                // array('max_length', array(':value', 32)),
                // array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'apellido' => array(
                array('not_empty'),
                // array('min_length', array(':value', 4)),
                // array('max_length', array(':value', 32)),
                // array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'domicilio_personal' => array(
                array('not_empty'),
                // array('min_length', array(':value', 4)),
                // array('max_length', array(':value', 32)),
                // array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'email' => array(
                array('not_empty'),
                // array('min_length', array(':value', 4)),
                // array('max_length', array(':value', 127)),
                array('email'),
            ),
            'telefono' => array(
                array('not_empty')
            ),
            'donante' => array(
                array('not_empty')
            ),
            'grupo_sanguineo' => array(
                array('not_empty')
            ),
        );
    }
}