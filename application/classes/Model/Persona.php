<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Modelo Persona
 * 
 * EL nombre del modelo debe conicidir con la tabla pero en singular
 * 
 */
class Model_Persona extends Model_ORM_Template {
    protected $_has_one = array(
        'socio' => array('foreign_key' => 'persona_id'),
        'judicial' => array('foreign_key' => 'persona_id'),
        'paciente' => array('foreign_key' => 'persona_id'),
        'contacto' => array('foreign_key' => 'persona_id'),
        'colaborador' => array('foreign_key' => 'persona_id'),
        'empresa' => array('foreign_key' => 'persona_id'),
        'plan_de_cuenta' => array(
            'model' => 'PlanDeCuenta',
            'foreign_key' => 'persona_id'
        ),
    );
    protected $_TIPO_APORTE = array(
        'mensual' => 12,
        'trimestral' => 4,
        'semestral' => 2,
        'anual' => 1
    );
    public function rules()
    {
        return array(
            // Aca van los atributos que coniciden con los de la tabla EXACTO y siempre en minusculas
            'nombre' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
            ),
            'apellido' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
            ),
            'domicilio_personal' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
            ),
            'email' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
                //array('email'),
            ),
            'telefono' => array(
                array('not_empty'),
                array('max_length', array(':value', 45)),
            ),
            'donante' => array(
                //ver como validar
                // array('digit'),
            ),
            'grupo_sanguineo' => array(
                array('max_length', array(':value', 45)),
            ),
        );
    }

    /**
     * Funcion para generar la cuenta a las personas
     *
     * @var int $tipo_cuenta
     */
    public function generar_cuenta($tipo_cuenta = 1, $monto = 0, $tipo_aporte = 'mensual')
    {
        #instanciamos un plan de cuenta
        $cuenta = ORM::factory('PlanDeCuenta');
        # Agregamos el tipo de cuenta que es
        $cuenta->tipos_plan_cuentas_id = $tipo_cuenta;
        # La relacionamos a la persona
        $cuenta->persona_id = $this->id;
        $cuenta->fecha_adelante = date('Y-m-d', time());
        # Salvamos primero por que debe crearse el id
        $cuenta->save();
        # Ahora si recien generamos las cuotas ya que necesitan el id de cuenta.
        $cuenta->generar_cuotas($monto,$this->_TIPO_APORTE[$tipo_aporte]);
    }

    /**
    *Funcion para generar la cuenta de un judicial
    *@var int $tipo_cuenta
    */
    public function generar_cuentajudicial($tipo_cuenta = 1, $monto = 0, $cuotas)
    {
        #instanciamos un plan de cuenta
        $cuenta = ORM::factory('PlanDeCuenta');
        # Agregamos el tipo de cuenta que es
        $cuenta->tipos_plan_cuentas_id = $tipo_cuenta;
        # La relacionamos a la persona
        $cuenta->persona_id = $this->id;
        $cuenta->fecha_adelante = date('Y-m-d', time());
        # Salvamos primero por que debe crearse el id
        $cuenta->save();
        # Ahora si recien generamos las cuotas ya que necesitan el id de cuenta.
        $cuenta->generar_cuotasjudiciales($monto,$cuotas);
    }

    /**
     * Funcion para saber si la persona tiene cuenta generada
     *
     */
    public function tiene_cuenta()
    {
        if ($this->plan_de_cuenta->id != NULL)
            return true;
        else
            return false;
    }

    public function jsonSerialize()
    {
        return $this->as_array();
    }

    public function acreditar_pago($data = array())
    {
        
    }
}