<?php
$conn = new mysqli("localhost", "root", "", "directorio_personajes"); // Sin contraseña

$id = $_GET['id'] ?? '';

if ($id) {
    $query = "SELECT * FROM personajes WHERE id_DP = $id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo json_encode(null);
    }
} else {
    echo json_encode(null);
}

$conn->close();
?>
