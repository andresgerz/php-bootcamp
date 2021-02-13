<?php

/* 
6. Escribir un programa que dado una oración, y dos palabras, búsque la primer palabra dentro de la oración y la reemplace por la segunda palabra.

*/

use function PHPSTORM_META\type;

$string0 = 'Todos los caminos van hacia Roma asd.';

function switchWord($sentence, $word1, $word2) {

  $rest = substr($sentence, 0, -1);
  $sentenceArr = explode(' ', $rest);
  print_r($sentenceArr);
  // Lineal searching
  foreach($sentenceArr as $key => $val)  {
    $word1 === $val ? $sentenceArr[$key] = $word2 : [];
    
  } 
  return $sentenceArr; 
}
echo '<br><br>';
echo switchWord($string0, 'Roma', 'CABA');