<?php
/* 
3. Escribir un programa que incremnte un número pasado por referencia y devuelva si dicho nuevo número es Par o Impar.

*/

$nro = 43;

function isEven(&$n) {
  return $n % 2 === 0 ? 'Even' : 'Obb';
}

isEven($nro);

var_dump($nro . '<br>');
var_dump(isEven($nro));