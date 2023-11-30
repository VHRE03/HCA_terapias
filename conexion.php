<?php

$server = "proyectovr.c6jxn6lqsup8.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "PVRpvr123";
$data_base = "proyecto_vr";

//Crear la conexion con la base de datos
$conexion = new mysqli($server, $username, $password, $data_base);

//Validar la conexion
if ($conexion -> connect_error) {
    die('Fallo en la conexion ' . $conexion -> connect_error);
}
?>