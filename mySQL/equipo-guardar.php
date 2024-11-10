<?php
session_start();
include 'conexion.php';

if (isset($_POST['nombre_equipo'], $_POST['personajes']) && !empty($_POST['personajes'])) {
    $user_id = $_SESSION['user_id'];  // Asegúrate de que el nombre de la variable de sesión sea correcto
    $nombre_equipo = $conn->real_escape_string($_POST['nombre_equipo']);
    $personajes = $_POST['personajes'];

    // Insertar el equipo en la tabla equipos_favoritos
    $query = "INSERT INTO equipos_favoritos(user_id, nombre_equipo) VALUES ('$user_id', '$nombre_equipo')";
    if ($conn->query($query)) {
        $id_equipo = $conn->insert_id;  // Obtener el id del equipo recién insertado

        // Insertar cada personaje en la tabla equipo_personajes
        foreach ($personajes as $id_personaje) {
            $query = "INSERT INTO equipo_personajes (id_equipo_EP, id_personaje_EP) VALUES('$id_equipo', '$id_personaje')";
            $conn->query($query);
        }

        // Si todo sale bien, enviar mensaje de éxito
        $_SESSION['mensaje'] = "Equipo guardado exitosamente.";
        header("Location: http://localhost/Wiki/equipos.php"); // Redirigir a la página de equipos (ajustar si es necesario)
    } else {
        $_SESSION['mensaje'] = "Error al guardar el equipo.";
        header("Location: http://localhost/Wiki/equipos.php"); // Redirigir a la página de equipos (ajustar si es necesario)
    }
} else {
    $_SESSION['mensaje'] = "Seleccione al menos un personaje y un nombre para el equipo.";
    header("Location: http://localhost/Wiki/equipos.php"); // Redirigir a la página de equipos (ajustar si es necesario)
}
?>
