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
    <link href="css/directorio/dir-agregar.css" rel="stylesheet" type="text/css">
    <link href="css/directorio/dir-bar-izq.css" rel="stylesheet" type="text/css">
    <title>Agregar a Directorio</title>
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
    <div >
        <section class="directorio">
            <div id="dir-titulo">Directorio</div>
                <nav class="menu">
                    <a href="directorio_personajes.php" class="menu-button">Personajes</a>
                    <a href="directorio_armas.php" class="menu-button">Armas</a>
                    <a href="directorio_agregar.php" class="menu-button">+ Agregar</a>
                </nav>
        </section>
    </div>

    <div class="info cerrado">
        <header>
            <nav class="ubicacion">
                <div id="home-link">
                    <a href="index.php"><span>Home</span></a>
                </div>
                <div id="link">
                    <i>/</i>
                    <span>Agregar</span>
                </div>
            </nav>

            <h2 id="titulo-info">Agregar Personaje o Arma</h2>
        </header>

        <div class="cont-tipo">
            <label for="tipo" class="tipo">Tipo (Personaje o Arma):</label>
            <select id="tipo" name="tipo" required onchange="toggleForm()" class="select-tipo">
                <option value="">Seleccionar...</option>
                <option value="Personaje">Personaje</option>
                <option value="Arma">Arma</option>
            </select>
        </div>

        <!-- Formulario para Personaje -->
        <form id="personaje-form" action="mySQL/dir-agregar-upload.php" method="post" enctype="multipart/form-data" class="formulario" style="display: none;">
            <div class="caja">
                <label for="name">Nombre del Personaje:</label>
                <input type="text" id="name" name="name" class="insertar col-1" required>
            </div>

            <div class="caja">
                <label for="rareza_DP">Rareza:</label>
                <select id="rareza_DP" name="rareza_DP" class="selec" required>
                    <option value="">Seleccionar...</option>
                    <option value="4">4 Estrellas</option>
                    <option value="5">5 Estrellas</option>
                </select>
            </div>

            <div class="caja">
                <label for="elemento_DP">Elemento:</label>
                <select name="elemento_DP" id="elemento_DP" class="selec" required>
                    <option value="">Seleccionar...</option>
                    <option value="pyro">Pyro</option>
                    <option value="cryo">Cryo</option>
                    <option value="electro">Electro</option>
                    <option value="geo">Geo</option>
                    <option value="anemo">Anemo</option>
                    <option value="hydro">Hydro</option>
                </select>
            </div>

            <div class="caja">
                <label for="arma_DP">Tipo de Arma:</label>
                <select name="arma_DP" id="arma_DP" class="selec" required>
                    <option value="">Seleccionar...</option>
                    <option value="catalizador">Catalizador</option>
                    <option value="arco">Arco</option>
                    <option value="espada">Espada</option>
                    <option value="mandoble">Mandoble</option>
                    <option value="lanza">Lanza</option>
                </select>
            </div>

            <div class="caja">
            <label for="description_DP">Descripción:</label><br>
            <textarea id="description_DP" name="description_DP" maxlength="200" class="insertar col-2" required></textarea>
            </div>
            
            <div class="caja">
                <label for="imagenURL_DP">Subir Imagen del Personaje (URL o Archivo):</label>
                <input type="text" id="imagenURL_DP" name="imagenURL_DP" placeholder="http://example.com/image.jpg" class="insertar col-1">
                <br>
                <label for="file_DP">O subir del local:</label>
                <input type="file" id="file_DP" name="file_DP" accept="image/*">
            </div>

            <div class="cargar">
                <button type="submit" name="submit_DP">Cargar Personaje</button>
            </div>
        </form>

        <!-- Formulario para Arma -->
        <form id="arma-form" action="mySQL/dir-agregar-upload.php" method="post" enctype="multipart/form-data" class="formulario" style="display: none;">
            <div class="caja">
                <label for="name_DA">Nombre del Arma:</label>
                <input type="text" id="name_DA" name="name_DA" class="insertar col-1" required>
            </div>

            <div class="caja">
                <label for="type_DA">Tipo de Arma:</label>
                <select name="type_DA" id="type_DA" class="selec" required>
                    <option value="">Seleccionar...</option>
                    <option value="catalizador">Catalizador</option>
                    <option value="arco">Arco</option>
                    <option value="espada">Espada</option>
                    <option value="mandoble">Mandoble</option>
                    <option value="lanza">Lanza</option>
                </select>
            </div>

            <div class="caja">
                <label for="calidad_DA">Calidad:</label>
                <select id="calidad_DA" name="calidad_DA" class="selec" required>
                    <option value="">Seleccionar...</option>
                    <option value="3">3 Estrellas</option>
                    <option value="4">4 Estrellas</option>
                    <option value="5">5 Estrellas</option>
                </select>
            </div>

            <div class="caja">
                <label for="atributo_DA">Atributo Secundario:</label>
                <select name="atributo_DA" id="atributo_DA" class="selec" required>
                    <option value="">Seleccionar...</option>
                    <option value="ataque">Ataque</option>
                    <option value="defensa">Defensa</option>
                    <option value="vida">Vida</option>
                    <option value="recarga">Recarga</option>
                    <option value="prob.crit">Prob.Crit</option>
                    <option value="daño.crit">Daño.Crit</option>
                </select>
            </div>



            <div class="caja">
                <label for="description_DA">Descripción:</label><br>
                <textarea id="description_DA" name="description_DA" maxlength="200" class="insertar col-2" required></textarea>
            </div>

            <div class="caja">
                <label for="imagenURL_DA">Subir Imagen del Personaje (URL o Archivo):</label>
                <input type="text" id="imagenURL_DA" name="imagenURL_DA" class="insertar col-1" placeholder="http://example.com/image.jpg">
                <br>
                <label for="file_DA">O subir del local:</label>
                <input type="file" id="file_DA" name="file_DA" accept="image/*">
            </div>

            <div class="cargar">
                <button type="submit" name="submit_DA">Cargar Arma</button>
            </div>
        </form>


    </div>

    <script src="js/dir-agregar-validar.js"></script>
    <script src="js/dir-agregar.js"></script>
</body>
</html>

<!--ver la parte de inportar imagen-->