<?php
session_start();

if(!$_SESSION['empleados']) {
    require_once('data.php');
    $_SESSION['empleados'] = $empleados;
} else {
    $empleados = $_SESSION['empleados'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica Arrays</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
  <!-- Header Main Container -->
  <div class="header-main">
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-4">
          <div class="logo">
            <a href=""><img src="images/logo.png" alt="Globant"></a>
          </div>
        </div>
        <div class="col-6 col-md-8">
          <nav>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Listado de Empleados</h1>
            <div class="card">
                <div class="card-body">
                    <div class="row mt-5">
                        <div class="col-6 offset-6 text-right">
                            <a class="btn btn-info" href="add_form.php">Agregar</a>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <table class="table table-hover">
                                <thead class="thead-dark">
                                  <tr>
                                    <th>Legajo</th>
                                    <th>Nombre y Apellido</th>
                                    <th>Dirección</th>
                                    <th>Email</th>
                                    <th>Sueldo</th>
                                    <th>Rol</th>
                                    <th>Opciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($empleados as $key => $empleado) {
                                    ?>
                                    <tr>
                                        <td><?=$empleado['legajo']?></td>
                                        <td><?=$empleado['first_name'] . ' ' . $empleado['last_name']?></td>
                                        <td><?=$empleado['address']?></td>
                                        <td><?=$empleado['email']?></td>
                                        <td><?=$empleado['salary']?></td>
                                        <td><?=$empleado['rol']?></td>
                                        <td>
                                            <a href="process.php?action=edit&id=<?=$key?>">Editar</a>
                                            <a href="process.php?action=del&id=<?=$key?>">Eliminar</a>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
