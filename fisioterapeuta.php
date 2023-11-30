<?php

include_once('conexion.php');

$fecha_hora_inicio = $_POST['fecha_hora_inicio'];
$fecha_hora_fin = $_POST['fecha_hora_fin'];
$actividad_realizada = $_POST['actividad_realizada'];
$id_paciente = $_POST['id_paciente'];

$sql = "INSERT INTO hand_care_assistant_terapia (fecha_hora_inicio, fecha_hora_fin, actividad_realizada, id_paciente) VALUES ('$fecha_hora_inicio', '$fecha_hora_fin', '$actividad_realizada', '$id_paciente')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro ingresado correctamente";
} else {
    echo $conexion->error;
}

$conexion->close();

?>