<?php
/* 
7. Escribir un programa que dado un número entero al azar entre 1 y 100 calcule si es par o impar, en caso de ser par lo múltiplique por 3 y en caso de ser impar lo divida por 5. Redondear la división a dos decimales. 

*/
$nro = rand(1, 100);

echo 'Number: ' . $nro;  
$is_even = $nro % 2 === 0;

$result = $is_even ? $nro * 3 : number_format($nro/5, 2);

echo '<br><br>Result: ' . $result;