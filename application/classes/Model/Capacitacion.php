<?php defined('SYSPATH') or die('No direct access allowed.');

// EL nombre del modelo debe conicidir con la tabla pero en singular 
class Model_Capacitacion extends ORM {
 
    public function rules()
    {
        return array(
            // Aca van los atributos que coniciden con los de la tabla EXACTO y siempre en minusculas
            'titulo' => array(
                array('not_empty'),
                // array('min_length', array(':value', 4)),
                // array('max_length', array(':value', 32)),
                // array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'descripcion' => array(
                array('not_empty'),
                // array('min_length', array(':value', 4)),
                // array('max_length', array(':value', 32)),
                // array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'cupos' => array(
                array('not_empty'),
                // array('min_length', array(':value', 4)),
                // array('max_length', array(':value', 32)),
                // array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'fecha_capacitacion' => array(
                array('not_empty'),
                // array('min_length', array(':value', 4)),
                // array('max_length', array(':value', 127)),
                array('email'),
            ),
            'hora' => array(
                array('not_empty')
            ),
            'lugar' => array(
                array('not_empty')
            ),
        );
    }
}