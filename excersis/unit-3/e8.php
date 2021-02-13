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
8. Escribir una función que permita realizar conversiones de distancia considerando que 1km = 1000 metros y que 1 m = 100 centimetros. 

*/
$number = isset($_POST['number_convert']) ? $_POST['number_convert'] : '';
$convert = isset($_POST['convert']) ? $_POST['convert'] : '';


function convertTo($number, $convert) {
  switch($convert) {
    case 'km-m':
      return $number*1000;
    case 'km-cm':
      return $number*100000;
    case 'm-km':
      return $number/1000;
    case 'm-cm':
      return $number*100;
    case 'cm-km':
      return $number/100000;
    case 'cm-m':
      return $number/100;
  }
}

echo convertTo($number, $convert) . '<br><br>';

echo $number ;
echo $convert;



?>

  <h1>Conversor</h1>
  <div>
    <form id="form-convert" method="POST" action="e8.php">
      <label for="select_convert_id">convertion: </label>
      <select name="convert" id="select_convert_id">
        <option value="km-m">km to m</option>
        <option value="km-cm">km to cm</option>
        <option value="m-km">m to km</option>
        <option value="m-cm">m to cm</option>
        <option value="cm-km">cm to km</option>
        <option value="cm-m">cm to m</option>
      </select>
      <label for="number_convert_id">Convert</label>
      <input type="number" name="number_convert" id="number_convert_id">
      <input type="submit" value="Send">
    </form>
    <div class="result">

    </div>
  </div>


  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

  <script type="text/javascript">
 
    // AJAX
    $('#form-convert').submit(e => {
      console.log(e);
      e.preventDefault();

      const name = $('#number_convert_id').val();
      console.log(name);
    
      $.post("e8_data.php", {postData: name}, (response) => {
        
        $('#form-convert').trigger('reset');
      });
    }); 


  </script>
</body>
</html>