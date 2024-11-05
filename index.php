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
    <link href="css/inicio.css" rel="stylesheet" type="text/css">
    <title>WikiWish</title>
</head>
<body>
    <!----Esto es la barra de arriba---->
    <div class="nav-bar-pc-fixed"> 
        <div class="nav-bar-pc-bg"></div>
        <div class="nav-bar-pc-logo">
            <a href="index.html" target="_blank"></a>
        </div>
        <div class="nav-buscador">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="nav-search-ic-search">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.722 8.103a4.4 4.4 0 118.8 0 4.4 4.4 0 01-8.8 0zm4.4-6.8a6.8 6.8 0 103.885 12.382l2.466 2.466a1.2 1.2 0 001.697-1.697l-2.466-2.466A6.8 6.8 0 008.122 1.303z" fill="#fff" fill-opacity=".45"></path>
            </svg>
            <input type="search" placeholder="Esto es solo decoracion..." id="buscador"/>
        </div>
        <div class="user-panel-avatar" onclick="toggleDropdown()">
            <img src="imagenes/pompom.jpg" alt="avatar">
            <div class="dropdown-menu" id="dropdown-menu">
                <a href="mySQL/logout.php">Cerrar Sesión</a>
            </div>
        </div>
    </div>

    <!-----ESTO ES LA PANTALLA------->
    <header>
        <div class="titulo">
            <img src="/imagenes/titulo.png" alt="titulo" />
        </div>
    </header>

    <nav class="caja-enlases">
        <div class="cajita">
            <div class="svg-wrapper">
                <div class="iconos-menu">
                    <div class="imagen"></div>
                </div>
                <a href="http://localhost/Wiki/directorio_personajes.html" class="btn draw-border" id="miBoton1">Personajes</a> <!-- Enlace con estilo de botón -->
            </div>
        </div> 
    
        <div class="cajita">
            <div class="svg-wrapper">
                <div class="iconos-menu">
                    <div class="imagen"></div>
                </div>
                <a href="http://localhost/Wiki/directorio_armas.html" class="btn draw-border" id="miBoton2">Armas</a> <!-- Enlace con estilo de botón -->
            </div>
        </div>
    
        <div class="cajita">
            <div class="svg-wrapper">
                <div class="iconos-menu">
                    <div class="imagen"></div>
                </div>
                <a href="http://localhost/Wiki/directorio_enemigos.html" class="btn draw-border" id="miBoton3">hola :P</a> <!-- Enlace con estilo de botón -->
            </div>
        </div>
    
        <div class="cajita">
            <div class="svg-wrapper">
                <div class="iconos-menu">
                    <div class="imagen"></div>
                </div>
                <a href="http://localhost/Wiki/calculadora.html" class="btn draw-border" id="miBoton4">Calculadora de Mejoras</a> <!-- Enlace con estilo de botón -->
            </div>
        </div>
    
        
    </nav>    

    <script src="js/barraArriba.js"></script>
    <!--<script src="js/index-enlases.js"></script>-->
</body>
</html>