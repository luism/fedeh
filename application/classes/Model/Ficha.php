<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Ficha extends ORM {

    protected $_has_one = array(
        'socio' => array('foreign_key' => 'ficha_id'),
    );
    protected $_has_many = array(
        'historial' => array('foreign_key' => 'ficha_id'),
    );
    protected $_belongs_to = array(
        'colaborador' => array('foreign_key' => 'colaborador_id')
    );

    public function rules()
    {
        return array(
            // Aca van los atributos que coniciden con los de la tabla EXACTO y siempre en minusculas
            'numero_ficha' => array(
                array('not_empty'),
            ),
        );
    }

    /**
     * Listamos todas las fichas
     * @return array arreglo de fichas
     */
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

    /**
     * Listamos las fichas disponibles.
     * @return [type] [description]
     */
    static public function listar_disponibles()
    {
        /*
        SELECT fichas.id, fichas.numero_ficha FROM fichas
        LEFT JOIN socios ON fichas.id = socios.ficha_id
        WHERE socios.id IS NULL;
        */
       $fichas = ORM::factory('Ficha')
       ->join('socios','LEFT')
       ->on('ficha.id', '=', 'socios.ficha_id')
       ->where('socios.id', '=', NULL)->find_all();
       return $fichas;
    }

    public function ultimo_asociado()
    {
        $historiales = $this->historial->find_all()->as_array();
        if (is_array($historiales))
        {
            $historial = end($historiales);
            return $historial->socio;
        }
        else
        {
            return FALSE;
        }
    }
}