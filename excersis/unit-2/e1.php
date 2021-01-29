<?php
/* 
1. Escribir un programa que realice la suma de dos números enteros. Si los números son el mismo se debe devolver el triple del resultado.
	
	Ejemplo: 
	$num1 = 2;
	$num2= 2;
  $total=12; */

$nro1 = 10;
$nro2 = 11;

$result = $nro1 === $nro2 ? $nro1 * 3 : $nro1 + $nro2;

echo "Result: " . $result;