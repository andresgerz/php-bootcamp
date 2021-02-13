<?php

$contactos = array(
	1 => array(
		'Nombre' => '',
		'Email' => '',
	),
	array(
		'Nombre' => '',
		'Email' => '',
	),
	array(
		'Nombre' => 'Hola',
	),
	array(
		'Nombre' => '',
		'Email' => '',
	),
	array(
		'Email' => '',
	),
	0 => array(
		'Email' => '',
	),
	array(
		'Email' => '',
		'is_active' => false,
		'Edad' => 25,
		0 => array(
			'Nombre' => 'No',
		),
	),
);
$location = array(
	'Argentina' => array(
		'Buenos Aires' => array(
			'Tandil' => '7000'
		)
	)
);
$location_other = array();
$resultado = array_merge($location_other, $location);
var_dump($resultado);