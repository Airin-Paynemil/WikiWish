<?php
session_start();
include 'conexion.php'; // Asegúrate de que el archivo de conexión esté correcto

// Validar que el usuario esté autenticado
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Por favor, inicie sesión');
          window.location.href = 'http://localhost/Wiki/pantallasInicio/login.html';</script>";
    exit();
}

// Comprobar el tipo de datos recibidos
if (isset($_POST['submit_DP']) || isset($_POST['submit_DA'])) {
    
    // Establecer variables comunes
    $directorio = $_SERVER['DOCUMENT_ROOT'] . '/Wiki/imagenes/uploads/';
    $imagen = "";

    // Validar y procesar el formulario de personaje
    if (isset($_POST['submit_DP'])) {
        $nombre = $_POST['name'];
        $rareza = $_POST['rareza_DP'];
        $elemento = $_POST['elemento_DP'];
        $arma_tipo = $_POST['arma_DP'];
        $descripcion = $_POST['description_DP'];
        
        // Procesar y guardar la imagen del personaje
        if (!empty($_POST['imagenURL_DP'])) {
            // Asegurarse de que es una URL válida
            $imagen = filter_var($_POST['imagenURL_DP'], FILTER_VALIDATE_URL);
            if ($imagen) {
                // Insertar datos en la base de datos usando la URL de imagen proporcionada
                $sql = "INSERT INTO directorio_personajes (nombre_DP, rareza_DP, elemento_DP, arma_DP, descripcion_DP, imagenURL_DP) 
                        VALUES ('$nombre', '$rareza', '$elemento', '$arma_tipo', '$descripcion', '$imagen')";
                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('Personaje agregado exitosamente');
                        window.location.href = 'http://localhost/Wiki/directorio_personajes.php';</script>";
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            } else {
                echo "URL de imagen no válida.";
            }
        } else if ($_FILES['file_DP']['size'] <= 2 * 1024 * 1024) {
            // Procesar como archivo subido si no se proporciona URL
            $imagen = $directorio . basename($_FILES["file_DP"]["name"]);
            if (move_uploaded_file($_FILES["file_DP"]["tmp_name"], $imagen)) {
                // Insertar con ruta de imagen en el servidor
                $sql = "INSERT INTO directorio_personajes (nombre_DP, rareza_DP, elemento_DP, arma_DP, descripcion_DP, imagenURL_DP) 
                        VALUES ('$nombre', '$rareza', '$elemento', '$arma_tipo', '$descripcion', '$imagen')";
                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('Personaje agregado exitosamente');
                        window.location.href = 'http://localhost/Wiki/directorio_personajes.php';</script>";
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            } else {
                echo "Error al subir la imagen.";
            }
        } else {
            echo "La imagen debe ser menor a 2 MB.";
        }


    // Validar y procesar el formulario de arma
    } elseif (isset($_POST['submit_DA'])) {
        $nombre = $_POST['name_DA'];
        $calidad = $_POST['calidad_DA'];
        $tipo = $_POST['type_DA'];
        $atributo = $_POST['atributo_DA'];
        $descripcion = $_POST['description_DA'];
        
        // Procesar y guardar la imagen del arma
        if ($_FILES['file_DA']['size'] <= 2 * 1024 * 1024) {
            $imagen = $directorio . basename($_FILES["file_DA"]["name"]);
            if (move_uploaded_file($_FILES["file_DA"]["tmp_name"], $imagen)) {
                // Insertar datos en la base de datos con nombres de columnas específicos
                $sql = "INSERT INTO directorio_armas (nombre_DA, calidad_DA, tipo_DA, atributo_DA, descripcion_DA, imagenURL_DA) 
                        VALUES ('$nombre', '$calidad', '$tipo', '$atributo', '$descripcion', '$imagen')";
                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('Arma agregada exitosamente');
                          window.location.href = 'http://localhost/Wiki/directorio_armas.php';</script>";
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            } else {
                echo "Error al subir la imagen.";
            }
        } else {
            echo "La imagen debe ser menor a 2 MB.";
        }
    }
}
mysqli_close($conn);
?>

