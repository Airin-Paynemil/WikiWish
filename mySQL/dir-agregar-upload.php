<?php
session_start();
include 'conexion.php'; // Conexión a la base de datos

// Asegúrate de que el usuario esté autenticado
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Por favor, inicie sesión');
          window.location.href = 'http://localhost/Wiki/pantallasInicio/login.html';</script>";
    exit();
}

// Establecer el directorio de imágenes para personajes y armas
$directorio_personajes = $_SERVER['DOCUMENT_ROOT'] . '/Wiki/imagenes/upload/personajes/';
$directorio_armas = $_SERVER['DOCUMENT_ROOT'] . '/Wiki/imagenes/upload/armas/';

// Proceso de carga para Personaje
if (isset($_POST['submit_DP'])) {
    $nombre = $_POST['name'];
    $rareza = $_POST['rareza_DP'];
    $elemento = $_POST['elemento_DP'];
    $arma_tipo = $_POST['arma_DP'];
    $descripcion = $_POST['description_DP'];
    $imagenRuta = "";

    if (!empty($_POST['imagenURL_DP'])) {
        // Descargar imagen desde una URL externa
        $imagenURL = filter_var($_POST['imagenURL_DP'], FILTER_VALIDATE_URL);
        if ($imagenURL) {
            $nombreImagen = basename($imagenURL);
            $imagenRuta = $directorio_personajes . $nombreImagen;

            // Copiar la imagen desde la URL al servidor local
            if (copy($imagenURL, $imagenRuta)) {
                $rutaParaBD = "http://localhost/Wiki/imagenes/upload/personajes/" . $nombreImagen;
            } else {
                echo "Error al copiar la imagen desde la URL.";
                exit();
            }
        } else {
            echo "URL de imagen no válida.";
            exit();
        }
    } elseif ($_FILES['file_DP']['size'] <= 2 * 1024 * 1024) {
        // Cargar imagen desde archivo
        $nombreImagen = basename($_FILES["file_DP"]["name"]);
        $imagenRuta = $directorio_personajes . $nombreImagen;

        if (move_uploaded_file($_FILES["file_DP"]["tmp_name"], $imagenRuta)) {
            $rutaParaBD = "http://localhost/Wiki/imagenes/upload/personajes/" . $nombreImagen;
        } else {
            echo "Error al subir la imagen.";
            exit();
        }
    } else {
        echo "La imagen debe ser menor a 2 MB.";
        exit();
    }

    // Insertar datos en la base de datos
    $sql = "INSERT INTO directorio_personajes (nombre_DP, rareza_DP, elemento_DP, arma_DP, descripcion_DP, imagenURL_DP) 
            VALUES ('$nombre', '$rareza', '$elemento', '$arma_tipo', '$descripcion', '$rutaParaBD')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Personaje agregado exitosamente');
              window.location.href = 'http://localhost/Wiki/directorio_personajes.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Proceso de carga para Arma
if (isset($_POST['submit_DA'])) {
    $nombre = $_POST['name_DA'];
    $calidad = $_POST['calidad_DA'];
    $tipo = $_POST['type_DA'];
    $atributo = $_POST['atributo_DA'];
    $descripcion = $_POST['description_DA'];
    $imagenRuta = "";

    if ($_FILES['file_DA']['size'] <= 2 * 1024 * 1024) {
        // Cargar imagen desde archivo
        $nombreImagen = basename($_FILES["file_DA"]["name"]);
        $imagenRuta = $directorio_armas . $nombreImagen;

        if (move_uploaded_file($_FILES["file_DA"]["tmp_name"], $imagenRuta)) {
            $rutaParaBD = "http://localhost/Wiki/imagenes/upload/armas/" . $nombreImagen;
        } else {
            echo "Error al subir la imagen.";
            exit();
        }
    } else {
        echo "La imagen debe ser menor a 2 MB.";
        exit();
    }

    // Insertar datos en la base de datos
    $sql = "INSERT INTO directorio_armas (nombre_DA, calidad_DA, tipo_DA, atributo_DA, descripcion_DA, imagenURL_DA) 
            VALUES ('$nombre', '$calidad', '$tipo', '$atributo', '$descripcion', '$rutaParaBD')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Arma agregada exitosamente');
              window.location.href = 'http://localhost/Wiki/directorio_armas.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
