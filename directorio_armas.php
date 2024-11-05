<?php 
session_start(); 
if (!isset($_SESSION['user_id'])) { 
    echo 
    "<script>alert('Por favor, inicie sesión'); 
    window.location.href = 'http://localhost/Wiki/pantallasInicio/login.html';</script>"; 
exit(); 
} 
?>

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
    <div id="division_barra">
        <section class="directorio">
            <div id="dir-titulo">Directorio</div>
                <nav class="menu">
                    <a href="directorio_personajes.php" class="menu-button">Personajes</a>
                    <a href="directorio_armas.php" class="menu-button">Armas</a>
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
                        <input type="checkbox" id="option3-1" data-filter="5 estrellas">
                    </div>

                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option3-4">4 Estrellas</label>
                        <input type="checkbox" id="option3-2" data-filter="4 estrellas">
                    </div>

                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option3-3">3 Estrellas</label>
                        <input type="checkbox" id="option3-2" data-filter="3 estrellas">
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
          

        <!--ARMAS-->
        <div id="armas-contenedor" class="armas-contenedor">
            <div class="prueba cursor" data-atributo="recarga" data-arma="espada" data-calidad="4 estrellas">
                <div class="contenedor-info">
                    <img src="imagenes/armas/favonius.webp" class="icono-info"/>
                  <div class="info-arma">
                        <p class="nombre">Espada de Favonius
                            <span class="rareza">
                                4
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            </span>
                        </p>
                        <p class="descripcion">Una espada larga estándar de los Caballeros de Favonius. ¡Canalizar el poder de los elementos nunca fue tan fácil como con esta espada!.</p>
                  </div>
              </div>
            </div>

            <div class="prueba cursor" data-atributo="prob.crit" data-arma="lanza" data-calidad="3 estrellas">
              <div class="contenedor-info">
                  <img src="imagenes/armas/borlablanca.webp" class="icono-info"/>
                <div class="info-arma">
                      <p class="nombre">Espada de Favonius
                          <span class="rareza">
                              3
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                          </span>
                      </p>
                      <p class="descripcion">Un arma estándar de la Geoarmada. Tiene un eje firme y una punta de lanza afilada. Es un arma muy fiable.</p>
                </div>
              </div>
            </div>

            <div class="prueba cursor" data-atributo="daño.crit" data-arma="catalizador" data-calidad="5 estrellas">
              <div class="contenedor-info">
                  <img src="imagenes/armas/tula.webp" class="icono-info"/>
                <div class="info-arma">
                      <p class="nombre">Reminiscencia de Tulaytulah
                          <span class="rareza">
                              5
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                          </span>
                      </p>
                      <p class="descripcion">Una campana hecha de zafiro y plata pura. Su lejana reverberación es, paradójicamente, muy nítida.</p>
                </div>
              </div>
            </div>

            <div class="prueba cursor" data-atributo="ataque" data-arma="mandoble" data-calidad="4 estrellas">
              <div class="contenedor-info">
                  <img src="imagenes/armas/prototipo.webp" class="icono-info"/>
                <div class="info-arma">
                      <p class="nombre">Prototipo Arcaico
                          <span class="rareza">
                              4
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                          </span>
                      </p>
                      <p class="descripcion">Una gran espada descubierta en la Forja Peñasco Oscuro. Al blandirla, tiene tal poder que uno puede sentir como si pudiera cortar a través del espacio.</p>
                </div>
              </div>
            </div>

            <div class="prueba cursor" data-atributo="prob.crit" data-arma="mandoble" data-calidad="4 estrellas">
              <div class="contenedor-info">
                  <img src="imagenes/armas/garrote.webp" class="icono-info"/>
                <div class="info-arma">
                      <p class="nombre">Garrote del Dialogo
                          <span class="rareza">
                              4
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                          </span>
                      </p>
                      <p class="descripcion">Una gran maza con incrustaciones de obsidiana y un excelente poder de persuasión.</p>
                </div>
              </div>
            </div>

            <div class="prueba cursor" data-atributo="vida" data-arma="arco" data-calidad="4 estrellas">
              <div class="contenedor-info">
                  <img src="imagenes/armas/corazon.webp" class="icono-info"/>
                <div class="info-arma">
                      <p class="nombre">Corazon de la Lluvia
                          <span class="rareza">
                              5
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                          </span>
                      </p>
                      <p class="descripcion">Ya sea en un escenario o un campo de batalla, la música que produce conmueve fácilmente el corazón de quien la escucha.</p>
                </div>
              </div>
            </div>
            
        </div>

    </div>

    <script src="js/barraArriba.js"></script>
    <script src="js/dir-armas-filtro.js"></script>
</body>
</html>