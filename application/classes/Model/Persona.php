<?php defined('SYSPATH') or die('No direct access allowed.');

// EL nombre del modelo debe conicidir con la tabla pero en singular 
class Model_Persona extends ORM {
 
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
                array('not_empty')
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