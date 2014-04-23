<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Socio extends Model_Persona {

    protected $_belongs_to = array(
        'persona' => array('foreign_key' => 'persona_id')
    );

    protected $_has_many = array(
        'historial' => array('foreign_key' => 'socio_id')
    );

    public function rules()
    {
    // Atributos espeicificos de socio
        return array(
            'tipo_documento' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
            ),
            'nro_documento' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
            ),
            'domicilio_laboral' => array(
                array('max_length', array(':value', 45)),
            ),
            'fecha_nacimiento' => array(
                array('not_empty'),
                array('date'),
            ),
            'tipo_aporte' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
            ),
            'descuento_planilla' => array(/* Ver como validamos...// array('digit'),*/),
            'numero_ficha' => array(),
            'monto' => array(),
            'ficha_id' => array(
                array(array($this, 'is_unique')),
            ),
        );
    }

    /**
    * Listamos las fichas disponibles
    * Por defecto tendremos en cuenta las fichas del 1 al 1000
    *
    * TODO: Agregar a una configuracion general el maximo de fichas.
    *
    * @return array fichas disponibles
    */
    public static function listar_fichas_disponibles()
    {
        # Primero debemos traer las fichas ocupadas.
        $fichas_ocupadas = DB::select('numero_ficha')
            ->from('personas')
            ->join('socios')
            ->on('personas.id', '=', 'socios.persona_id')
            ->execute()
            ->as_array();
        # Generamos un array ya acomodado de la forma:
        # Array
        # (
        #     [0] => 1
        #     [1] => 2
        #     ...
        #     [n]  => m
        # )
        $fichas_ocupadas_ok = Helper_Fichas::generar_fichas_ocupadas($fichas_ocupadas);
        # Generamos las fichas diponibles totales
        $fichas_disponibles = Helper_Fichas::generar();
        # Retornamos la diferencia entre las disponibles totales - ocupadas
        return array_diff($fichas_disponibles, $fichas_ocupadas_ok);
    }

    /**
     * [asignar_ficha description]
     * @param  [type] $numero_ficha [description]
     * @return [type]               [description]
     */
    public function asignar_ficha($numero_ficha)
    {
        $ficha = ORM::factory('Ficha')
                ->where('numero_ficha', '=', $numero_ficha)
                ->find();
        $this->ficha_id = $ficha->id;
        return $ficha->id;
    }

    public function is_unique($ficha_id)
    {
            return ! (bool) DB::select(array(DB::expr('COUNT(ficha_id)'), 'total'))
                ->from($this->_table_name)
                ->where('ficha_id', '=', $ficha_id)
                ->execute()
                ->get('total');
    }

    public function nombre_completo($primero_apellido = FALSE)
    {
        if ($primero_apellido)
        {
            return $this->persona->apellido . ', ' . $this->persona->nombre;
        }
        else
        {
            return $this->persona->nombre . ' ' . $this->persona->apellido;
        }
    }
}
