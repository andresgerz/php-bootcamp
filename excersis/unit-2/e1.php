<?php
/* 
1. Escribir un programa que realice la suma de dos números enteros. Si los números son el mismo se debe devolver el triple del resultado.
	
	Ejemplo: 
	$num1 = 2;
	$num2= 2;
  $total=12; */

$nro1 = 10;
$nro2 = 10;

$suma = $nro1 + $nro2;
$result = $nro1 === $nro2 ? $suma * 3 : $suma;

echo "Result: " . $result;