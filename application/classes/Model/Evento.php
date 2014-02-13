<?php defined('SYSPATH') or die('No direct access allowed.');

// EL nombre del modelo debe conicidir con la tabla pero en singular 
class Model_Evento extends ORM {
 
    public function rules()
    {
        return array(
            // Aca van los atributos que coniciden con los de la tabla EXACTO y siempre en minusculas
            'nombre' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
            ),
            'fecha_' => array(
                array('not_empty'),
                array('date'),
            ),
            'hora' => array(
                array('not_empty'),
                //array('date_time_set()'),
            ),
            'lugar' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
            ),
            'descripcion' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
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