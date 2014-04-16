<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Ficha extends ORM {
 
    public function rules()
    {
        return array(
            // Aca van los atributos que coniciden con los de la tabla EXACTO y siempre en minusculas
            'numero_ficha' => array(
                array('not_empty'),
            ),
        );
    }

    public function listar()
    {
        $fichas_arr = array();
        $fichas = ORM::factory('Ficha');
        if  ($fichas->count_all())
        {
            $fichas->find_all();
            foreach ($fichas as $value) {
                $fichas_arr[] = $value;
            }
        }
        return $fichas_arr;
    }
}