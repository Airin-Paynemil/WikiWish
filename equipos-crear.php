<?php 
session_start(); 
if (!isset($_SESSION['user_id'])) { 
    echo 
    "<script>alert('Por favor, inicie sesión'); 
    window.location.href = 'http://localhost/Wiki/pantallasInicio/login.html';</script>"; 
    exit(); 
} 
?>
<?php include 'mySQL/conexion.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/barra_arriba.css" rel="stylesheet" type="text/css">
    <link href="css/equipos/equipos.css" rel="stylesheet" type="text/css">
    <link href="css/equipos/equipos-crear.css" rel="stylesheet" type="text/css">
    <title>Crear Equipo Favorito</title>

</head>
<body>
    <!-- Barra de navegación -->
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

    <!-- Contenido principal -->
    <div id="contenedor-principal">
        <nav class="ubicacion">
            <div class="home-link">
                <a href="index.php"><span>Home</span></a>
            </div>
            <div class="link">
                <i>/</i>
            </div>
            <div class="home-link">
                <a href="equipos.php" ><span>Equipos Favoritos</span></a>
            </div>
            <div class="link">
                <i>/</i>
                <span>Agregar Nuevo Equipo</span>
            </div>
        </nav>
        <header>
            <h1>Crear un nuevo equipo favorito</h1>
        </header>

        <form id="team-form" action="mySQL/equipo-guardar.php" method="POST">
            <label>Nombre del Equipo:</label>
            <input type="text" name="nombre_equipo" required><br><br>

            <!-- Área de personajes seleccionados -->
            <h2>Personajes Seleccionados:</h2>
            <div id="selected-characters">
                <!-- Aquí se llenarán los personajes seleccionados -->
                <div class="selected-slot"></div>
                <div class="selected-slot"></div>
                <div class="selected-slot"></div>
                <div class="selected-slot"></div>
            </div>
            <br>

            <h2>Selecciona los personajes (máximo 4):</h2>
            <div id="character-container">
                <?php 
                    $query = "SELECT id_DP, nombre_DP, imagenURL_DP FROM directorio_personajes"; 
                    $result = $conn->query($query);
                    while ($personaje = $result->fetch_assoc()): ?>
                        <div class="character-card" onclick="selectCharacter(this, '<?php echo $personaje['imagenURL_DP']; ?>')">
                            <img src="<?php echo $personaje['imagenURL_DP']; ?>" alt="<?php echo $personaje['nombre_DP']; ?>">
                            <label><?php echo $personaje['nombre_DP']; ?></label>
                            <input type="checkbox" name="personajes[]" value="<?php echo $personaje['id_DP']; ?>">
                        </div>
                <?php endwhile; ?>
            </div>
            
            <input type="submit" value="Guardar Equipo">
        </form>
    </div>

    <script src="js/barraArriba.js"></script>
    <script src="js/equipos-crear.js"></script>
</body>
</html>
