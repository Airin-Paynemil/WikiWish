<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; // Por defecto en XAMPP
    $database = "wikiWish";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

?>
