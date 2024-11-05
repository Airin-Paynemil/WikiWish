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
    <link href="css/calculadora/calculadora.css" rel="stylesheet" type="text/css">
    <title>Document</title>
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

    <!---ACA EMPIEZA LA INFO-->
    <div id="contenedor-principal">
        <header>
            <h1>Calculadora de Mejoras</h1>
        </header>
        <nav class="calculadoras">
            <div class="cartas cajas">
                <p class="titulo-cartas">Personajes</p>
                <p class="descripcion">Puedes elejir 2 personajes para subir</p>
                <button class="boton-empezar" id="boton1">Empezar</button>
            </div>
            <div class="cartas cajas">
                <p class="titulo-cartas">Armas</p>
                <p class="descripcion">Puedes elejir 2 personajes para subir</p>
                <button class="boton-empezar" id="boton2">Empezar</button>
            </div>
            <div class="cartas cajas">
                <p class="titulo-cartas">Personajes</p>
                <p class="descripcion">Puedes elejir 2 personajes para subir</p>
                <button class="boton-empezar" id="boton3">Empezar</button>
            </div>
        </nav>
          
    </div>

    <script src="js/calculadora-enlases.js"></script>
    <script src="js/barraArriba.js"></script>
</body>
</html>