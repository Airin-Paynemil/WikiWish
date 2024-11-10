<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Por favor, inicie sesión'); window.location.href = 'http://localhost/Wiki/pantallasInicio/login.html';</script>";
    exit();
}

include 'mySQL/conexion.php';

// Consultar los equipos del usuario
$user_id = $_SESSION['user_id'];
$query = "SELECT id_equipo, nombre_equipo FROM equipos_favoritos WHERE user_id = '$user_id' ORDER BY id_equipo DESC"; // Ordenado por el equipo más reciente
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/barra_arriba.css" rel="stylesheet" type="text/css">
    <link href="css/equipos/equipos.css" rel="stylesheet" type="text/css">
    <title>Equipos Favoritos</title>
</head>
<body>
    <!-- Barra de navegación superior -->
    <div class="nav-bar-pc-fixed"> 
        <div class="nav-bar-pc-bg"></div>
        <div class="nav-bar-pc-logo">
            <a href="index.php" target="_blank"></a>
        </div>
        <div class="nav-buscador">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="nav-search-ic-search">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.722 8.103a4.4 4.4 0 118.8 0 4.4 4.4 0 01-8.8 0zm4.4-6.8a6.8 6.8 0 103.885 12.382l2.466 2.466a1.2 1.2 0 001.697-1.697l-2.466-2.466A6.8 6.8 0 008.122 1.303z" fill="#fff" fill-opacity=".45"></path>
            </svg>
            <input type="search" placeholder="Buscar..." id="buscador"/>
        </div>
        <div class="user-panel-avatar" onclick="toggleDropdown()">
            <img src="imagenes/pompom.jpg" alt="avatar">
            <div class="dropdown-menu" id="dropdown-menu">
                <a href="mySQL/logout.php">Cerrar Sesión</a>
            </div>
        </div>
    </div>

    <!-- Contenedor principal -->
    <div id="contenedor-principal">
        <nav class="ubicacion">
            <div class="home-link">
                <a href="index.php"><span>Home</span></a>
            </div>
            <div class="link">
                <i>/</i>
                <span>Equipos Favoritos</span>
            </div>
        </nav>
        <header>
            <h1>Equipos Favoritos</h1>
        </header>

        <!-- Enlace para crear un nuevo equipo -->
        <a href="http://localhost/Wiki/equipos-crear.php"><span>Crear nuevo equipo</span></a>

        <!-- Mostrar los equipos -->
        <div class="equipos-container">
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($equipo = $result->fetch_assoc()): 
                        // Consultar los personajes del equipo
                        $id_equipo = $equipo['id_equipo'];
                        $query_personajes = "SELECT p.nombre_DP, p.imagenURL_DP FROM equipo_personajes ep JOIN directorio_personajes p ON ep.id_personaje_EP = p.id_DP WHERE ep.id_equipo_EP = '$id_equipo'";
                        $result_personajes = $conn->query($query_personajes);
                    ?>
                        <div class="equipo-card">
                            <div class="equipo-header">
                                <h2><?php echo $equipo['nombre_equipo']; ?></h2>
                            </div>
                            <div class="personajes-container">
                                <?php while ($personaje = $result_personajes->fetch_assoc()): ?>
                                    <div class="personaje-card">
                                        <div class="image-container">
                                            <img src="<?php echo $personaje['imagenURL_DP']; ?>" alt="<?php echo $personaje['nombre_DP']; ?>" class="personaje-img">
                                        </div>
                                        <p class="personaje-name"><?php echo $personaje['nombre_DP']; ?></p>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                            <!-- Botón de eliminar -->
                            <form method="POST" action="mySQL/equipo-eliminar.php">
                                <input type="hidden" name="id_equipo" value="<?php echo $id_equipo; ?>">
                                <button type="submit" class="delete-btn">Eliminar</button>
                            </form>
                        </div>
                    <?php endwhile; ?>

                <?php else: ?>
                    <p class="no-equipos">No tienes ningún equipo aquí aún.</p>

                <?php endif; ?>
            </div>




    <script src="js/barraArriba.js"></script>
</body>
</html>
