<?php defined('SYSPATH') or die('No direct access allowed.');

// EL nombre del modelo debe conicidir con la tabla pero en singular 
class Model_Evento extends ORM {
 
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
            'fecha' => array(
                array('not_empty'),
                // array('min_length', array(':value', 4)),
                // array('max_length', array(':value', 32)),
                // array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'hora' => array(
                array('not_empty'),
                // array('min_length', array(':value', 4)),
                // array('max_length', array(':value', 32)),
                // array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'lugar' => array(
                array('not_empty'),
                // array('min_length', array(':value', 4)),
                // array('max_length', array(':value', 127)),
                array('email'),
            ),
            'descripcion' => array(
                array('not_empty')
            ),
            'ingresos' => array(
                array('not_empty')
            ),
            'gastos_decoracion' => array(
                array('not_empty')
            ),
            'gastos_imprenta' => array(
                array('not_empty')
            ),
            'gastos_movilidad' => array(
                array('not_empty')
            ),
            'gastos_permisos' => array(
                array('not_empty')
            ),
            'gastos_servicios' => array(
                array('not_empty')
            ),
            'gastos_tecnica' => array(
                array('not_empty')
            ),
            'gastos_varios' => array(
                array('not_empty')
            ),
            'gastos_total' => array(
                array('not_empty')
            ),
        );
    }
}