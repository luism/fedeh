<?php defined('SYSPATH') or die('No direct access allowed.');

	class Model_Paciente extends Model_Persona{
		protected $_belongs_to = array('persona' => array('foreign_key' => 'personas_id'));
		public function rules()
		{
		//Atributos propios de paciente
		return array(
				'estado' => array(
					array('not_empty'),
					array('max_lenght', array(':value', 45)),
				)
			);	
		}

	}


