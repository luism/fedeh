<?php defined('SYSPATH') or die('No direct access allowed.');

	class Model_Paciente extends Model_Persona{
		public function rules(){
			$rules = parent::rules();
			
			//Atributos propios de paciente
			$pacientes_rules = array(
				'estado' => array(
					array('not_empty'),
					array('max_lenght', array(':value', 45)),
				)
			);	
		return array_merge($rules, $pacientes_rules);
		}

	}


