<?php

/* 
9. Escribir un programa que dado un string, devuelva el mismo en forma invertida (Ej: Cancion => noicnaC). Investigar funciones pre-built que te ayuden a resolverlo. 

*/

$word = '';
$wordArr = explode($word, '');
strlen($word);
$acum = 'empty';

/* 
for($i = 0; $i < strlen($word); $i--) {
  $acum += $wordArr[$i];
} */
/* 
$txt = "abcd";

$newArr = str_split($txt);

$str = "abcdef"; $concat = ""; 

for ($i=0; $i < strlen($str); ++$i) { 
  
  $rest = substr($str, $i, 1); 
  $test1 = $rest . "<br>"; 
  $test2 = ord($rest); 
  $concat = $test2; echo $concat; 
} 

echo $rest;asdasd 

*/
echo $acum;