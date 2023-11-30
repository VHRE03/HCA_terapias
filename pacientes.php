<?php

include_once('conexion.php');

$id_fisioterapeuta = $_POST['id_fisioterapeuta'];

$sql = "SELECT * FROM hand_care_assistant_paciente WHERE id_fisioterapeuta = '$id_fisioterapeuta'";

$pacientes = $conexion -> query($sql);

if ($pacientes -> num_rows > 0) {
    // hay información que mostrar
    while ($row = $pacientes->fetch_assoc()) {
        echo "id: " .$row["id_paciente"] . "Nombre: " .$row["nombre"] . ";";
    }
} else {
    echo "Sin información ingresada aún";
}

$conexion->close();

?>