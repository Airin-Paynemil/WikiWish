<?php 
session_start(); 
if (!isset($_SESSION['user_id'])) { 
    echo 
    "<script>alert('Por favor, inicie sesión'); 
    window.location.href = 'http://localhost/Wiki/pantallasInicio/login.html';</script>"; 
exit(); 
} 
?>

<?php include 'mySQL/dir-pers-consult.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/barra_arriba.css" rel="stylesheet" type="text/css">
    <link href="css/directorio/directorio.css" rel="stylesheet" type="text/css">
    <link href="css/directorio/filtros.css" rel="stylesheet" type="text/css">
    <link href="css/directorio/dir-bar-izq.css" rel="stylesheet" type="text/css">
    <title>Directorio</title>
</head>
<body>
    <!----Esto es la barra de arriba---->
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

    <!---ESTO ES LA BARRA DIRECTORIO----->
    <div id="division_barra">
        <section class="directorio">
            <div id="dir-titulo">Directorio</div>
                <nav class="menu">
                    <a href="directorio_personajes.php" class="menu-button">Personajes</a>
                    <a href="directorio_armas.php" class="menu-button">Armas</a>
                    <a href="directorio_agregar.php" class="menu-button">+ Agregar</a>
                </nav>
        </section>
    </div>

    <!--ESTA ES LA PARTE EN DONDE APARECE LA INFO-->
    <div id="division_barra" class="info">
        <nav class="ubicacion">
            <div id="home-link">
                <a href="index.php"><span>Home</span></a>
            </div>
            <div id="link">
                <i>/</i>
                <span>Personajes</span>
            </div>
        </nav>

        <div>
            <h1 id="titulo-info">Personajes</h1>
        </div>

        <div class="caja-filtros">
            <div class="contenedor-filtros">
                <div class="filtro">
                    <span>Rareza</span>
                </div>

                <div class="filter-container">
                    <button id="filter-toggle3">Seleccionar Opciones</button>
                    <div id="filter-options3" class="hidden">
                        <div class="label-container" onclick="toggleCheckbox(this)">
                            <label for="option3-1">5 estrellas</label> <!-- Cambiado de "5 Estrellas" a "5" -->
                            <input type="checkbox" id="option3-1" data-filter="5">
                        </div>
                        <div class="label-container" onclick="toggleCheckbox(this)">
                            <label for="option3-2">4 estrellas</label> <!-- Cambiado de "4 Estrellas" a "4" -->
                            <input type="checkbox" id="option3-2" data-filter="4">
                        </div>

                        <div class="filter-buttons">
                            <button id="apply-filters3">Aceptar</button>
                            <button id="reset-filters3">Restablecer</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="contenedor-filtros">
                <div class="filtro">
                    <span>Filtro</span>
                </div>
                <div class="filter-container">
                    <button id="filter-toggle1">Elemento</button>
                    <div id="filter-options1" class="hidden">
                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option1">Dendro</label>
                        <input type="checkbox" id="option1" data-filter="dendro">
                    </div>
                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option2">Electro</label>
                        <input type="checkbox" id="option2" data-filter="electro">
                    </div>
                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option3">Anemo</label>
                        <input type="checkbox" id="option3" data-filter="anemo">
                    </div>
                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option4">Pyro</label>
                        <input type="checkbox" id="option4" data-filter="pyro">
                    </div>
                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option5">Cryo</label>
                        <input type="checkbox" id="option5" data-filter="cryo">
                    </div>
                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option6">Hydro</label>
                        <input type="checkbox" id="option6" data-filter="hydro">
                    </div>
                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option7">Geo</label>
                        <input type="checkbox" id="option7" data-filter="geo">
                    </div>
                    <div class="filter-buttons">
                        <button id="apply-filters1">Aceptar</button>
                        <button id="reset-filters1">Restablecer</button>
                    </div>
                    </div>
                </div>
                <div class="filter-container">
                    <button id="filter-toggle2">Tipo de Arma</button>
                    <div id="filter-options2" class="hidden">
                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option2-1">Mandoble</label>
                        <input type="checkbox" id="option2-1" data-filter="mandoble">
                    </div>
                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option2-2">Arco</label>
                        <input type="checkbox" id="option2-2" data-filter="arco">
                    </div>
                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option2-3">Catalizador</label>
                        <input type="checkbox" id="option2-3" data-filter="catalizador">
                    </div>
                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option2-4">Espada</label>
                        <input type="checkbox" id="option2-4" data-filter="espada">
                    </div>
                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option2-5">Lanza</label>
                        <input type="checkbox" id="option2-5" data-filter="lanza">
                    </div>
                    <div class="filter-buttons">
                        <button id="apply-filters2">Aceptar</button>
                        <button id="reset-filters2">Restablecer</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contenedor info -->
        <div class="armas-contenedor">
            <?php
            // Verificar si la consulta retornó resultados
            if ($result_DP) {
                // Recorrer los resultados y mostrarlos
                while ($row_DP = $result_DP->fetch_assoc()) {
                    echo '<div class="prueba cursor" data-elemento="' . $row_DP['elemento_DP'] . '" data-arma="' . $row_DP['arma_DP'] . '" data-rareza="' . $row_DP['rareza_DP'] . '">';
                        echo '<div class="contenedor-info">';
                            echo '<img src="' . $row_DP['imagenURL_DP'] . '" class="icono-info"/>';
                            echo '<div class="info-escrita">';
                                echo '<div class="info-escrita-elementos">';
                                    echo '<p class="nombre">' . $row_DP['nombre_DP'] . '</p>';
                                    echo '<span class="rareza">' . $row_DP['rareza_DP'] . '
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                        </span>';

                                    // Seleccionar imagen para el elemento
                                    $elementoImagen = '';
                                    if ($row_DP['elemento_DP'] === 'pyro') {
                                        $elementoImagen = 'http://localhost/Wiki/imagenes/iconos/pyro.png';
                                    } elseif ($row_DP['elemento_DP'] === 'cryo') {
                                        $elementoImagen = 'http://localhost/Wiki/imagenes/iconos/cryo.png';
                                    } elseif ($row_DP['elemento_DP'] === 'anemo') {
                                        $elementoImagen = 'http://localhost/Wiki/imagenes/iconos/anemo.png';
                                    } elseif ($row_DP['elemento_DP'] === 'electro') {
                                        $elementoImagen = 'http://localhost/Wiki/imagenes/iconos/electro.png';
                                    } elseif ($row_DP['elemento_DP'] === 'dendro') {
                                        $elementoImagen = 'http://localhost/Wiki/imagenes/iconos/dendro.png';
                                    } elseif ($row_DP['elemento_DP'] === 'hydro') {
                                        $elementoImagen = 'http://localhost/Wiki/imagenes/iconos/hydro.png';
                                    } elseif ($row_DP['elemento_DP'] === 'geo') {
                                        $elementoImagen = 'http://localhost/Wiki/imagenes/iconos/geo.png';
                                    }

                                    // Seleccionar imagen para el arma
                                    $armaImagen = '';
                                    if ($row_DP['arma_DP'] === 'mandoble') {
                                        $armaImagen = 'http://localhost/Wiki/imagenes/iconos/mandoble.png';
                                    } elseif ($row_DP['arma_DP'] === 'espada') {
                                        $armaImagen = 'http://localhost/Wiki/imagenes/iconos/espada.png';
                                    } elseif ($row_DP['arma_DP'] === 'lanza') {
                                        $armaImagen = 'http://localhost/Wiki/imagenes/iconos/lanza.png';
                                    } elseif ($row_DP['arma_DP'] === 'catalizador') {
                                        $armaImagen = 'http://localhost/Wiki/imagenes/iconos/catalizador.png';
                                    } elseif ($row_DP['arma_DP'] === 'arco') {
                                        $armaImagen = 'http://localhost/Wiki/imagenes/iconos/arco.png';
                                    }
                                    

                                    // Mostrar las imágenes según el elemento y el arma
                                    echo '<img src="' . $elementoImagen . '" class="icono-adicional" alt="' . $row_DP['elemento_DP'] . ' Icono">';
                                    echo '<img src="' . $armaImagen . '" class="icono-adicional" alt="' . $row_DP['arma_DP'] . ' Icono">';

                                echo '</div>';
                                echo '<p class="descripcion">' . $row_DP['descripcion_DP'] . '</p>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "No se encontraron personajes.";
            }
            ?>
        </div>



    </div>

    <script src="js/barraArriba.js"></script>
    <script src="js/dir-pers-filtro.js"></script>
</body>
</html>

