<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require '../modelo/Model.php';

    $conexion = new Model();

    $_POST = json_decode(file_get_contents('php://input'), true);


    $nombre   = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad     = $_POST['edad'];

    $conexion->guardarUsuario($nombre, $apellido, $edad);
} else {
    exit();
}
