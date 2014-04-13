<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Socio extends Model_Persona {
protected $_belongs_to = array('persona' => array('foreign_key' => 'persona_id'));
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
}
