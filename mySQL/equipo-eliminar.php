<?php
session_start();
include 'conexion.php';

// Verificamos que el usuario esté logueado y que se haya enviado un ID de equipo
if (!isset($_SESSION['user_id']) || !isset($_POST['id_equipo'])) {
    echo "<script>alert('Acceso no permitido'); window.location.href = 'index.php';</script>";
    exit();
}

$id_equipo = $_POST['id_equipo'];

// Iniciar transacción para eliminar el equipo y los personajes asociados
$conn->begin_transaction();

try {
    // Eliminar los personajes asociados al equipo
    $query_delete_personajes = "DELETE FROM equipo_personajes WHERE id_equipo_EP = '$id_equipo'";
    $conn->query($query_delete_personajes);

    // Eliminar el equipo de la tabla equipos_favoritos
    $query_delete_equipo = "DELETE FROM equipos_favoritos WHERE id_equipo = '$id_equipo'";
    $conn->query($query_delete_equipo);

    // Confirmamos que todo se ha eliminado correctamente
    $conn->commit();
    echo "<script>alert('Equipo eliminado exitosamente'); window.location.href = 'http://localhost/Wiki/equipos.php';</script>";
} catch (Exception $e) {
    // Si ocurre un error, revertimos los cambios
    $conn->rollback();
    echo "<script>alert('Error al eliminar el equipo'); window.location.href = 'http://localhost/Wiki/equipos.php';</script>";
}
?>
