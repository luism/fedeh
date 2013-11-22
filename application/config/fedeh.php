<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
	'encrypt_key' => 'fjdsjkfdskjfurew', 
	'cookie_salt' => 'fjsdijeihrewhbfsugfuyegwufewgwb',
	// 'cookie_lifetime' => DATETIME::YEAR,
	'session_lifetime' => 0,
	'header' => array
	(
		'title' => 'Fundación FEDEH',
		'keyword' => 'Fundación FEDEH',
	),
	'language' => array // No aplica
	(
			'es',
	),
	'account'	=> array
	(
		'create'	=> array
		(
			'username'	=> array
			(
				'min_length'	=> 4,
				'max_length'	=> 16,
				'format'		=> 'alpha_numeric', // alpha_dash, alpha
			),
			'password'	=> array
			(
				'min_length'	=> 6,
			)
		),
	),
);
