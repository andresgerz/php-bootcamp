<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  /* 
  1. Escribir un programa que dado un número devuelva si el mismo es primo o no. Un número primo es aquel número natural mayor a 1 que tiene únicamente dos divisores positivos distintos: él mismo y el 1. 
  */

  $number = $_GET['input_number'];

  function esPrimo($nro) {
    $count = 0;
    for ($i = 1; $i <= $nro; $i++) {
      if ($nro % $i === 0) {
        $count++;
      }
    }

    echo $count === 2 ? $nro . ' es primo.' : $nro . ' no es primo.';
  }

  esPrimo($number);

  ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <label for="input_number_id"></label>
    <input type="number" name="input_number" id="input_number_id">
    <button type="submit">Send</button>
  </form>

</body>
</html>



