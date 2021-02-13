<?php

/* Ejercicio 1: Cálculo de Código de Caracteres
Dada una cadena, convierta cada carácter en su código de
carácter ASCII y concatenarlos para crear un único número.
Ejemplo: 'ABC' --> 'A' = 65, 'B' = 66, 'C' = 67 --> 656667.
Luego Reemplazar cada ocurrencia del 7 por el número 1.
656667 => 656661
Finalmente devolver la diferencia entre ambos números.

*/

$txt = "abcd";

$txtArr = str_split($txt);


//var_dump($txtArr);

function toAscii($n) {
  
  return ord($n);
}

$arr = array_map('toAscii', $txtArr);

$nro1 = implode($arr);
$nro2 = str_replace('7', '1', $nro1);

echo $nro1 . " - " . $nro2 . "<br><br>";
echo $nro1 - $nro2;