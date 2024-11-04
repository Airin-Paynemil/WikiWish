<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "wikiwish";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['txt'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("INSERT INTO usuarios (nombre_usuario, email_usuarios, contraseña_usuarios) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);
    
    if ($stmt->execute()) {
        // Redirigir a login.html después de un registro exitoso
        header("Location: ../pantallasInicio/login.html");
        exit();
    } else {
        echo "Error en el registro: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
