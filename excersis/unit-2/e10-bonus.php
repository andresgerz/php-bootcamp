<?php
/*   
Crear un script que devuelva el siguiente patrón. Utilizar el loop for:
  *  
  * *
  * * *
  * * * *
  * * * * *

*/
/* 
$nro = array(1, 2, 3, 4, 5);

for($i = 0; $i < count($nro); $i++) {
  for($j = 1; $j < $nro[$i]; $j++) {
    echo '*';
  } 
  echo '<br>'; 
} */

$length = 5;

for ($i = 0; $i < $length; $i++) {
  for ($j = 0; $j <= $i; $j++) {
    echo '*';
  } 
  echo '<br>'; 
} 

?>