<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>e9</title>
</head>
<body>
  <?php
  
  /* 
  9. Escribir un programa que calcule y muestre por pantalla el factorial de un número usando ‘for’. El factorial de un número es el producto de todos los enteros hasta dicho número, incluyendolo (ej: Factorial de 4 = 1*2*3*4). 
   */
  
  //  AJAX !!!!!!!!!!!!!!!
  $number = $_GET['input_number'];

  $acum = 1;
  for ($i = 1; $i <= $number; $i++) {
    $acum *= $i;
  };

  echo '!' . $number . ' = ' . $acum;

  ?>
  <h1>Factorial</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <label for="input_number_id">Introduce a number:</label>
    <input type="number" name="input_number" id="input_number_id">
    <button type="submit">Send</button>
  </form>   
</body>
</html>


