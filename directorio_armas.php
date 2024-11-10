<?php 
session_start(); 
if (!isset($_SESSION['user_id'])) { 
    echo 
    "<script>alert('Por favor, inicie sesión'); 
    window.location.href = 'http://localhost/Wiki/pantallasInicio/login.html';</script>"; 
exit(); 
} 
?>
<?php include "mySQL/dir-armas-consult.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/barra_arriba.css" rel="stylesheet" type="text/css">
    <link href="css/directorio/directorio.css" rel="stylesheet" type="text/css">
    <link href="css/directorio/filtros.css" rel="stylesheet" type="text/css">
    <link href="css/directorio/dir-bar-izq.css" rel="stylesheet" type="text/css">
    <title>directorio</title>
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
    <div>
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
    <div class="info">
        <nav class="ubicacion">
          <div id="home-link">
              <a href="index.php"><span>Home</span></a>
          </div>
          <div id="link">
              <i>/</i>
              <span>Armas</span>
          </div>
        </nav>

        <div>
            <h1 id="titulo-info">Armas</h1>
        </div>

        <div class="caja-filtros">
            <div class="contenedor-filtros">
              <div class="filtro">
                <span>Calidad</span>
              </div>

              <div class="filter-container">
                <button id="filter-toggle3">Seleccionar Opciones</button>
                <div id="filter-options3" class="hidden">
                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option3-5">5 Estrellas</label>
                        <input type="checkbox" id="option3-5" value="5">
                    </div>

                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option3-4">4 Estrellas</label>
                        <input type="checkbox" id="option3-4" value="4">
                    </div>

                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option3-3">3 Estrellas</label>
                        <input type="checkbox" id="option3-3" value="3">
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
                <button id="filter-toggle1">Atributos Secundarios</button>
                <div id="filter-options1" class="hidden">
                  <div class="label-container" onclick="toggleCheckbox(this)">
                    <label for="option1-1">Defensa</label>
                    <input type="checkbox" id="option1-1" value="defensa">
                  </div>
                  <div class="label-container" onclick="toggleCheckbox(this)">
                    <label for="option1-2">Ataque</label>
                    <input type="checkbox" id="option1-2" value="ataque">
                  </div>
                  <div class="label-container" onclick="toggleCheckbox(this)">
                    <label for="option1-3">Vida</label>
                    <input type="checkbox" id="option1-3" value="vida">
                  </div>
                  <div class="label-container" onclick="toggleCheckbox(this)">
                    <label for="option1-4">Prob.Crit</label>
                    <input type="checkbox" id="option1-4" value="prob.crit">
                  </div>
                  <div class="label-container" onclick="toggleCheckbox(this)">
                    <label for="option1-5">Daño.Crit</label>
                    <input type="checkbox" id="option1-5" value="daño.crit">
                  </div>
                  <div class="label-container" onclick="toggleCheckbox(this)">
                    <label for="option1-6">Recarga</label>
                    <input type="checkbox" id="option1-6" value="recarga">
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
                      <input type="checkbox" id="option2-1" value="mandoble">
                    </div>
                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option2-2">Arco</label>
                        <input type="checkbox" id="option2-2" value="arco">
                    </div>
                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option2-3">Catalizador</label>
                        <input type="checkbox" id="option2-3" value="catalizador">
                    </div>
                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option2-4">Espada</label>
                        <input type="checkbox" id="option2-4" value="espada">
                    </div>
                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option2-5">Lanza</label>
                        <input type="checkbox" id="option2-5" value="lanza">
                    </div>
                    <div class="filter-buttons">
                    <button id="apply-filters2">Aceptar</button>
                    <button id="reset-filters2">Restablecer</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          

        <!--ARMAS-->
        <!-- Contenedor info -->
          <div class="armas-contenedor">
            <?php
            // Verificar si la consulta retornó resultados
            if ($result_DA) {
                // Recorrer los resultados y mostrarlos
                while ($row_DA = $result_DA->fetch_assoc()) {
                    echo '<div class="prueba cursor" data-atributo="' . $row_DA['atributo_DA'] . '" data-arma="' . $row_DA['tipo_DA'] . '" data-calidad="' . $row_DA['calidad_DA'] . '">';
                    echo '<div class="contenedor-info">';
                        // Imagen principal del arma
                        echo '<img src="' . $row_DA['imagenURL_DA'] . '" class="icono-info"/>';
                        echo '<div class="info-escrita">';
                            echo '<div class="info-escrita-elementos">';
                                // Nombre del arma
                                echo '<p class="nombre">' . $row_DA['nombre_DA'] . '</p>';
                                
                                // Calidad (con la estrella)
                                echo '<span class="rareza">' . $row_DA['calidad_DA'] . '
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                        <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                    </svg>
                                </span>';
                                
                                // Mostrar las imágenes adicionales (arma)
                                // Seleccionar imagen para el arma
                                $armaImagen = '';
                                if ($row_DA['tipo_DA'] === 'mandoble') {
                                    $armaImagen = 'http://localhost/Wiki/imagenes/iconos/mandoble.png';
                                } elseif ($row_DA['tipo_DA'] === 'espada') {
                                    $armaImagen = 'http://localhost/Wiki/imagenes/iconos/espada.png';
                                } elseif ($row_DA['tipo_DA'] === 'lanza') {
                                    $armaImagen = 'http://localhost/Wiki/imagenes/iconos/lanza.png';
                                } elseif ($row_DA['tipo_DA'] === 'catalizador') {
                                    $armaImagen = 'http://localhost/Wiki/imagenes/iconos/catalizador.png';
                                } elseif ($row_DA['tipo_DA'] === 'arco') {
                                    $armaImagen = 'http://localhost/Wiki/imagenes/iconos/arco.png';
                                }
                                
                                // Mostrar las imágenes según el arma
                                echo '<img src="' . $armaImagen . '" class="icono-adicional" alt="' . $row_DA['tipo_DA'] . ' Icono">';

                            echo '</div>'; // fin de info-escrita-elementos
                            echo '<p class="descripcion">' . $row_DA['descripcion_DA'] . '</p>';
                        echo '</div>'; // fin de info-escrita
                    echo '</div>'; // fin de contenedor-info
                    echo '</div>'; // fin de prueba
                }
            } else {
                echo "No se encontraron armas.";
            }
            ?>
        </div>



    </div>

    <script src="js/barraArriba.js"></script>
    <script src="js/dir-armas-filtro.js"></script>
</body>
</html>