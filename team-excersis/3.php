<?php
declare(strict_types=1);

/* 
Tarea
Para modificar la lista, decidimos atribuirle “Peso” a los números, donde el peso
de cada número va a ser desde ahora, la suma de sus dígitos. Por ejemplo, 99
va a tener un peso de 18. 100 va a tener un peso de 1, con lo cuál 100 estará
antes en la lista que 99.
Dado un string con los pesos de los miembros del FFC ordenarlo según la
nueva metodología considerando que cuando dos números tengan el mismo
“peso”, ordenarlos de menor a mayor
Ejemplo: “56 65 74 100 99 68 86 180 90” => “100 90 180 56 65 74 68 86 99” 

*/



$txt = '56 65 74 100 99 68 86 180 90';

$txtArr = preg_split('/ /', $txt);

//print_r($txtArr);
$arr2 = array();
foreach($txtArr as $nro) {
  $subArr = str_split($nro);

  $acum = 0;
  foreach($subArr as $n) {
    $acum += $n;
  }


  $arr2[] = $acum ;
}
print_r($txtArr);
echo '<br>';
echo '<br>';
print_r($arr2);
echo '<br>';
echo '<br>';
$ar = array_combine($txtArr, $arr2);
asort($ar);
print_r($ar);

for($i = 0; $i < count($ar); $i++) {
  
}


function quickSort() {


}