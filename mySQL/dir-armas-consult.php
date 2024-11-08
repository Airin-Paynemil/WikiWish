<?php
// Incluir archivo de conexión a la base de datos
include 'conexion.php';

// Ejecutar la consulta para obtener datos de armas
$sql_DA = "SELECT * FROM directorio_armas";
$result_DA = $conn->query($sql_DA);

// Verificar si la consulta fue exitosa
if ($result_DA) {
    // Retornar los resultados
    return $result_DA;
} else {
    // Retornar error en la consulta
    echo "Error en la consulta: " . $conn->error;
    return false;
}
?>
