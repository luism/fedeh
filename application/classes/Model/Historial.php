<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Historial extends ORM {

    protected $_table_name = 'historial';

    protected $_belongs_to = array(
        'ficha' => array('foreign_key' => 'ficha_id'),
        'socio' => array('foreign_key' => 'socio_id'),
    );
 
    public function rules()
    {
        return array(
            // Aca van los atributos que coniciden con los de la tabla EXACTO y siempre en minusculas
            '' => array(
                array('not_empty'),
            ),
        );
    }

 
}