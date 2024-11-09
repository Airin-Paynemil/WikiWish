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
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id_usuarios, contraseña_usuarios FROM usuarios WHERE email_usuarios = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $stored_password);
        $stmt->fetch();

        if ($password === $stored_password) {
            $_SESSION['user_id'] = $id;
            header("Location: http://localhost/Wiki/index.php");  // Cambiado a PHP
            exit();
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }
    $stmt->close();
}
$conn->close();
?>
