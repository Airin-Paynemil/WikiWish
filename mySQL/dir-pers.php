<?php
$conn = new mysqli("localhost", "tu_usuario", "tu_contraseña", "directorio");

$id = 6; // ID específico que queremos recuperar
$query = "SELECT * FROM personajes WHERE id = $id";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='prueba cursor'>";
        echo "<div class='contenedor-info'>";
        echo "<img src='" . $row['imagenURL_DP'] . "' class='icono-info' alt='" . $row['nombre_DP'] . "'/>";
        echo "<div class='info-arma'>";
        echo "<p class='nombre'>" . $row['nombre_DP'] . "</p>";
        echo "<p class='descripcion'>" . $row['descripcion_DP'] . "</p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "No se encontró el personaje con el ID especificado.";
}

$conn->close();
?>
