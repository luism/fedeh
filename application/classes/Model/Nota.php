<?php defined('SYSPATH') or die('No direct access allowed.');

// EL nombre del modelo debe conicidir con la tabla pero en singular 
class Model_Nota extends ORM {
 
    public function rules()
    {
        return array(
            // Aca van los atributos que coniciden con los de la tabla EXACTO y siempre en minusculas
            'motivo' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
            ),
            'fecha_nota' => array(
                array('not_empty'),
                array('date'),
            ),
            'dirigida_a' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
            ),
            'expte_generado' => array(
                array('max_length', array(':value', 45)),
                
            ),
            'entidad_expte' => array(
                array('max_length', array(':value', 45)),
            ),
            'fecha_expte' => array(
                array('date'),
            ),
        );
    }
}