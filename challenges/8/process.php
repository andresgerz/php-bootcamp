<?php
session_start();
$empleados = $_SESSION['empleados'];

if (isset($_POST['action']) || isset($_GET['action'])) {

    if (isset($_POST['action'])) {
        $action = $_POST['action'];
    } else if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = "";
    }


    switch ($action){
        case("add"):
            add_employee($empleados);
            return_index();
            break;
        case("del"):
            $employee_id = isset($_GET['id']) ? $_GET['id'] : "";
            del_employee($employee_id, $empleados);
            return_index();
            break;
        case("edit"):
            $employee_id = isset($_GET['id']) ? $_GET['id'] : "";
            break;
        default:
            return_index();
    }
}

function add_employee($empleados){
    // Recupero los datos
    $legajo = isset($_POST['legajo']) ? strtoupper($_POST['legajo']) : "";
    $first_name = isset($_POST['first_name']) ? ucwords($_POST['first_name']) : "";
    $last_name = isset($_POST['last_name']) ? ucwords($_POST['last_name']) : "";
    $email = isset($_POST['email']) ? strtolower($_POST['email']) : "";
    $address = isset($_POST['address']) ? ucwords($_POST['address']) : "";
    $salary = isset($_POST['salary']) ? $_POST['salary'] : "";
    $role = isset($_POST['role']) ? $_POST['role'] : "";

    $empleado_new = [
        "legajo" => $legajo,
        "first_name" => $first_name,
        "last_name" => $last_name,
        "address" => $address,
        "email" => $email,
        "salary" => $salary,
        "rol" => $role,
    ];
    if (validate_duplicate($empleados, $legajo)) {
        array_push($empleados, $empleado_new);
        save_empleados($empleados);
    }
}

function validate_duplicate($empleados, $legajo) {
    if (!in_array($legajo, array_column($empleados, 'legajo')))
        return true;
    else
        return false;
}

function del_employee($employee_id, $empleados) {
    if (in_array($employee_id, array_keys($empleados))) {
        unset($empleados[$employee_id]);
        save_empleados($empleados);
    }
}

function return_index() {
    header('LOCATION: index.php');
}

function save_empleados($empleados) {
    unset($_SESSION['empleados']);
    $_SESSION['empleados'] = $empleados;
}
