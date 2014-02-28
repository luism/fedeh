<?php defined('SYSPATH') or die('No direct access allowed.');

// EL nombre del modelo debe conicidir con la tabla pero en singular 
class Model_Capacitacion extends ORM {

    # Sobreescribimos el nombre de la tabla para que no de error al mapear, ya que mapea en ingles
    # incorrecto       |  correcto
    # =================|===============
    # capaciontacions  | capacitaciones
    protected $_table_name = 'capacitaciones';
 
    public function rules()
    {
        return array(
            // Aca van los atributos que coniciden con los de la tabla EXACTO y siempre en minusculas
            'titulo' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
            ),
            'descripcion' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
            ),
            'cupos' => array(
                array('not_empty'),
            ),
            'fecha_capacitacion' => array(
                array('not_empty'),
                array('date'),
            ),
            'hora' => array(
                array('not_empty')
                //array('date_time_set()'),
            ),
            'lugar' => array(
                array('not_empty'),
                array('max_length', array(':value', 100)),
            ),
        );
    }
}