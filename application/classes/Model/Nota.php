<?php defined('SYSPATH') or die('No direct access allowed.');

// EL nombre del modelo debe conicidir con la tabla pero en singular 
class Model_Nota extends ORM {
 
    public function rules()
    {
        return array(
            // Aca van los atributos que coniciden con los de la tabla EXACTO y siempre en minusculas
            'motivo' => array(
                array('not_empty'),
                // array('min_length', array(':value', 4)),
                // array('max_length', array(':value', 32)),
                // array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'fecha_nota' => array(
                array('not_empty'),
                // array('min_length', array(':value', 4)),
                // array('max_length', array(':value', 32)),
                // array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'dirigida_a' => array(
                array('not_empty'),
                // array('min_length', array(':value', 4)),
                // array('max_length', array(':value', 32)),
                // array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'expte_generado' => array(
                array('not_empty'),
                // array('min_length', array(':value', 4)),
                // array('max_length', array(':value', 127)),
                array('email'),
            ),
            'entidad_expte' => array(
                array('not_empty')
            ),
            'fecha_expte' => array(
                array('not_empty')
            ),
        );
    }
}