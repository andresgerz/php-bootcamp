<?php

/* 
8. Realizar una suma de todos los valores comprendidos entre 0 y 30 y devolver el resultado final por pantalla.

*/

$acum = 0;
for($i = 0; $i <= 30; $i++) {
  $acum += $i;  
}

echo 'Sumatoria: ' . $acum;