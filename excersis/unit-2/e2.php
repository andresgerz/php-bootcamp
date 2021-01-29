<?php

/* 
2. Escribir un programa que dado dos números enteros, obtenga la diferencia entre ellos y devuelva si la misma es par o impar. 
*/

$nro1 = 10 ;
$nro2 = 50;

$subtraction = $nro1 - $nro2;

$result = $subtraction % 2 === 0 ? 'even' : 'odd'; 

echo $subtraction . " -> " . $result;