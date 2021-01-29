<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php

/* Buen día gente!!! Como ayer los vi un poco asustados, hoy les traigo un lindo desafío para que jueguen facil con php y html (si quieren algo de css tambien)
La idea es crear un tablero de ajedrez. Para que todos sean similares, lo vamos a hacer con una tabla HTML y usando obviamente PHP para simplificar mucho el uso de filas y columnas (y no escribirlas todas). Para ello la tabla debe tener un ancho total de 240px, con 30px por celda (Alto y ancho). Pueden usar css o html con css inline. A DIVERTIRSE! */

/* function loop_for($n,$func) {
  for ($i = 1; $i <= $n; $i ++) {
    $func;
    echo $i;
  }
}

//callback
loop_for(8,loop_for(9,null)); */
/* function square($width, $height=$width) {
  
}
 */
$n=8;
echo '<div>';

for ($i = 1; $i <= $n; $i++) {
  echo '<div style="display: flex; flex-direction: row;width: 240px; border: 1px solid #aaa">';

  for ($j = 1; $j <= $n; $j++) {
 /*    
    '<div style="width: 30px; height: 30px; ' . (($i + $j) % 2 === 0 ? 'background-color: #000': 'background-color: #fff') . ';"></div>';
 */
    if (($i + $j) % 2 === 0) {
        echo '<div style="width:30px; height:30px; background-color: #000;"></div>';

      } else {
        echo '<div style="width:30px; height:30px; background-color: #fff;"></div>';
      }
  }
  echo '</div>';
}
echo '</div>';

?>

</body>
</html>