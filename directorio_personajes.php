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
                        <label for="option3-1">5 Estrellas</label>
                        <input type="checkbox" id="option3-1" data-filter="5 estrellas">
                    </div>
                    <div class="label-container" onclick="toggleCheckbox(this)">
                        <label for="option3-2">4 Estrellas</label>
                        <input type="checkbox" id="option3-2" data-filter="4 estrellas">
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
        <div id="armas-contenedor" class="armas-contenedor">
            <div class="prueba cursor" data-elemento="dendro" data-arma="mandoble" data-rareza="5 estrellas">
                <div class="contenedor-info">
                    <img src="imagenes/personajes/kinich.webp" class="icono-info"/>
                    <div class="info-arma">
                        <p class="nombre">Kinich 
                            <span class="rareza">
                                5
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            </span>
                        </p>
                        <p class="descripcion">Un cazasaurios de Huitztlán experto en calcular el precio de las cosas.</p>
                    </div>
                </div>
            </div>
            
            

            <div class="prueba cursor" data-elemento="anemo" data-arma="arco" data-rareza="4 estrellas">
                <div class="contenedor-info">
                    <img src="imagenes/personajes/faruzan.webp" class="icono-info"/>
                    <div class="info-arma">
                        <p class="nombre">Faruzan 
                            <span class="rareza">
                                4
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            </span>
                        </p>
                        <p class="descripcion">Una erudita “con cien años de antigüedad” a la que le encanta recalcar que tiene más experiencia que los demás.</p>
                    </div>
                </div>
            </div>

            <div class="prueba cursor" data-elemento="pyro" data-arma="mandoble" data-rareza="4 estrellas">
                <div class="contenedor-info">
                    <img src="imagenes/personajes/gaming.webp" class="icono-info"/>
                    <div class="info-arma">
                        <p class="nombre">Gaming 
                            <span class="rareza">
                                4
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            </span>
                        </p>
                        <p class="descripcion">Escolta de la Agencia de Transporte Seguro Cofrespada y líder del grupo Bestias Místicas Poderosas.</p>
                    </div>
                </div>
            </div>

            <div class="prueba cursor" data-elemento="electro" data-arma="lanza" data-rareza="5 estrellas">
                <div class="contenedor-info">
                    <img src="imagenes/personajes/shougun.webp" class="icono-info"/>
                    <div class="info-arma">
                        <p class="nombre">Raiden Shogun 
                            <span class="rareza">
                                5
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            </span>
                        </p>
                        <p class="descripcion">Su Excelencia, la todopoderosa Narukami, quien le prometió al pueblo de Inazuma la inmutable eternidad.</p>
                    </div>
                </div>
            </div>

            <div class="prueba cursor" data-elemento="cryo" data-arma="catalizador" data-rareza="5 estrellas">
                <div class="contenedor-info">
                    <img src="imagenes/personajes/wriothesley.webp" class="icono-info"/>
                    <div class="info-arma">
                        <p class="nombre">Wriothesley
                            <span class="rareza">
                                5
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            </span>
                        </p>
                        <p class="descripcion">El duque del Fuerte Merópide y gobernante oculto del oscuro fondo marino.</p>
                    </div>
                </div>
            </div>
            
            <div class="prueba cursor" data-elemento="geo" data-arma="mandoble" data-rareza="5 estrellas">
                <div class="contenedor-info">
                    <img src="imagenes/personajes/navia.webp" class="icono-info"/>
                    <div class="info-arma">
                        <p class="nombre">Navia
                            <span class="rareza">
                                5
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            </span>
                        </p>
                        <p class="descripcion">La actual presidenta de Spina di Rosula, una jefa adorable.</p>
                    </div>
                </div>
            </div>
            
            <div class="prueba cursor" data-elemento="anemo" data-arma="espada" data-rareza="5 estrellas">
                <div class="contenedor-info">
                    <img src="imagenes/personajes/kazuha.webp" class="icono-info"/>
                    <div class="info-arma">
                        <p class="nombre">Kaedehara Kazuha
                            <span class="rareza">
                                5
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            </span>
                        </p>
                        <p class="descripcion">Un samurái errante de Inazuma que actualmente se hospeda en la Flota Crux Meridianam de Liyue.</p>
                    </div>
                </div>
            </div>
            
            <div class="prueba cursor" data-elemento="geo" data-arma="lanza" data-rareza="4 estrellas">
                <div class="contenedor-info">
                    <img src="imagenes/personajes/kachina.webp" class="icono-info"/>
                    <div class="info-arma">
                        <p class="nombre">Kachina
                            <span class="rareza">
                                4
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            </span>
                        </p>
                        <p class="descripcion">Una joven guerrera de Nanatzcayan agraciada con el nombre antiguo de “Uthabiti”.</p>
                    </div>
                </div>
            </div>

            <div class="prueba cursor" data-elemento="pyro" data-arma="arco" data-rareza="5 estrellas">
                <div class="contenedor-info">
                    <img src="imagenes/personajes/yoimiya.webp" class="icono-info"/>
                    <div class="info-arma">
                        <p class="nombre">Yoimiya
                            <span class="rareza">
                                5
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            </span>
                        </p>
                        <p class="descripcion">La dueña de la tienda Pirotecnia Naganohara y Reina del Festival de Verano.</p>
                    </div>
                </div>
            </div>

            <div class="prueba cursor" data-elemento="cryo" data-arma="mandoble" data-rareza="4 estrellas">
                <div class="contenedor-info">
                    <img src="imagenes/personajes/chongyun.webp" class="icono-info"/>
                    <div class="info-arma">
                        <p class="nombre">Chongyun
                            <span class="rareza">
                                4
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            </span>
                        </p>
                        <p class="descripcion">Un joven exorcista procedente de una familia de exorcistas. Hace todo lo que puede para reprimir su propia “positividad congénita”.</p>
                    </div>
                </div>
            </div>

            <div class="prueba cursor" data-elemento="hydro" data-arma="espada" data-rareza="5 estrellas">
                <div class="contenedor-info">
                    <img src="imagenes/personajes/furina.webp" class="icono-info"/>
                    <div class="info-arma">
                        <p class="nombre">Furina
                            <span class="rareza">
                                5
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            </span>
                        </p>
                        <p class="descripcion">El foco de atención absoluto del escenario durante los juicios, hasta que la obra termina y el público rompe a aplaudir.</p>
                    </div>
                </div>
            </div>

            <div class="prueba cursor" data-elemento="electro" data-arma="arco" data-rareza="4 estrellas">
                <div class="contenedor-info">
                    <img src="imagenes/personajes/sethos.webp" class="icono-info"/>
                    <div class="info-arma">
                        <p class="nombre">Sethos
                            <span class="rareza">
                                4
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            </span>
                        </p>
                        <p class="descripcion">El heredero del Templo del Silencio. Portador de secretos y procedente del desierto.</p>
                    </div>
                </div>
            </div>

            <div class="prueba cursor" data-elemento="dendro" data-arma="catalizador" data-rareza="5 estrellas">
                <div class="contenedor-info">
                    <img src="imagenes/personajes/nahida.webp" class="icono-info"/>
                    <div class="info-arma">
                        <p class="nombre">Nahida
                            <span class="rareza">
                                5
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            </span>
                        </p>
                        <p class="descripcion">Un pajarito enjaulado en el Santuario Surasthana que solo puede contemplar el mundo desde sus sueños.</p>
                    </div>
                </div>
            </div>

            <div class="prueba cursor" data-elemento="hydro" data-arma="catalizador" data-rareza="5 estrellas">
                <div class="contenedor-info">
                    <img src="imagenes/personajes/mualani.webp" class="icono-info"/>
                    <div class="info-arma">
                        <p class="nombre">Mualani
                            <span class="rareza">
                                5
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            </span>
                        </p>
                        <p class="descripcion">	Una guía de Natlan muy famosa que lleva una tienda de suministros acuáticos.</p>
                    </div>
                </div>
            </div>
            
        </div>
        
        
        
    </div>

    <script src="js/barraArriba.js"></script>
    <script src="js/dir-pers-filtro.js"></script>
</body>
</html>
