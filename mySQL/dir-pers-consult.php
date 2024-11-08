<?php
// consulta_personajes.php

// Aquí incluye tu archivo de conexión a la base de datos
include 'conexion.php';

// Ejecutar la consulta
$sql_DP = "SELECT * FROM directorio_personajes";
$result_DP = $conn->query($sql_DP);

// Verificar si la consulta fue exitosa
if ($result_DP) {
    // Retornar los resultados
    return $result_DP;
} else {
    // Retornar error en la consulta
    echo "Error en la consulta: " . $conn->error;
    return false;
}
?>
