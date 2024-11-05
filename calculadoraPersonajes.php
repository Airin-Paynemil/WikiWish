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
    <link href="css/calculadora/calculadoraPersonajes.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    <!----Esto es la barra de arriba---->
    <div class="nav-bar-pc-fixed"> 
        <div class="nav-bar-pc-bg"></div>
        <div class="nav-bar-pc-logo">
            <a href="index.php" target="_blank"></a><!--target es para como quieres que se abra el link-->
        </div>
        <div class="nav-buscador">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg" 
                class="nav-search-ic-search">
                <path  
                    fill-rule="evenodd" clip-rule="evenodd" d="M3.722 8.103a4.4 4.4 0 118.8 0 4.4 4.4 0 01-8.8 0zm4.4-6.8a6.8 6.8 0 103.885 12.382l2.466 2.466a1.2 1.2 0 001.697-1.697l-2.466-2.466A6.8 6.8 0 008.122 1.303z" fill="#fff" fill-opacity=".45">
                </path>
            </svg><!--svg es para el icono de lupa que no pierda calidad-->
            <input type="search" placeholder="Buscar..." id="buscador"/><!--agregar-->
        </div>
        <div class="user-panel-avatar">
            <img src="imagenes/pompom.jpg" alt="avatar">
        </div>
    </div>

    <!---ACA EMPIEZA LA INFO-->
    <div id="contenedor-principal">
        <div>
            <h1>Calculadora de mejora de Personajes</h1>
        </div>
        <div id="recuadro">
            <div class="recuadro-info">
                <div>
                    <h2>Selecciona Personaje</h2>
                </div>
                <div>
                    <button>Todos los Personajes</button>
                    <button>Personajes Optenidos</button>
                </div>
                <div>
                    <p>Tipo elemental</p>
                    <div>
                        <img src="imagenes/iconos/icono-enemigos.png" alt="1" class="icono-elemental">
                        <img src="imagenes/iconos/icono-enemigos.png" alt="1" class="icono-elemental">
                        <img src="imagenes/iconos/icono-enemigos.png" alt="1" class="icono-elemental">
                        <img src="imagenes/iconos/icono-enemigos.png" alt="1" class="icono-elemental">
                        <img src="imagenes/iconos/icono-enemigos.png" alt="1" class="icono-elemental">
                        <img src="imagenes/iconos/icono-enemigos.png" alt="1" class="icono-elemental">
                        <img src="imagenes/iconos/icono-enemigos.png" alt="1" class="icono-elemental">
                    </div>
                </div>
                <div>
                    <p>Tipo de Arma</p>
                    <div>
                        <img src="imagenes/iconos/icono-enemigos.png" alt="1" class="icono-elemental">
                        <img src="imagenes/iconos/icono-enemigos.png" alt="1" class="icono-elemental">
                        <img src="imagenes/iconos/icono-enemigos.png" alt="1" class="icono-elemental">
                        <img src="imagenes/iconos/icono-enemigos.png" alt="1" class="icono-elemental">
                        <img src="imagenes/iconos/icono-enemigos.png" alt="1" class="icono-elemental">
                        <img src="imagenes/iconos/icono-enemigos.png" alt="1" class="icono-elemental">
                        <img src="imagenes/iconos/icono-enemigos.png" alt="1" class="icono-elemental">
                    </div>
                </div>
                <div class="caja">
                    <div class="flex-personajes">
                        <div class="contenedor-personaje">
                            <div class="personaje">
                                <div class="personaje-nivel">
                                    <img src="imagenes/img1.jpg" alt="img1">
                                </div>
                                <p class="nombre">Gabriela</p>
                            </div>
                        </div>

                        <div class="contenedor-personaje">
                            <div class="personaje">
                                <div class="personaje-nivel">
                                    <img src="imagenes/img1.jpg" alt="img1">
                                </div>
                                <p class="nombre">Gabriela</p>
                            </div>
                        </div>

                        <div class="contenedor-personaje">
                            <div class="personaje">
                                <div class="personaje-nivel">
                                    <img src="imagenes/img1.jpg" alt="img1">
                                </div>
                                <p class="nombre">Gabriela</p>
                            </div>
                        </div>
                        <div class="contenedor-personaje">
                            <div class="personaje">
                                <div class="personaje-nivel">
                                    <img src="imagenes/img1.jpg" alt="img1">
                                </div>
                                <p class="nombre">Gabriela</p>
                            </div>
                        </div>
                        <div class="contenedor-personaje">
                            <div class="personaje">
                                <div class="personaje-nivel">
                                    <img src="imagenes/img1.jpg" alt="img1">
                                </div>
                                <p class="nombre">Gabriela</p>
                            </div>
                        </div>
                        <div class="contenedor-personaje">
                            <div class="personaje">
                                <div class="personaje-nivel">
                                    <img src="imagenes/img1.jpg" alt="img1">
                                </div>
                                <p class="nombre">Gabriela</p>
                            </div>
                        </div>
                        <div class="contenedor-personaje">
                            <div class="personaje">
                                <div class="personaje-nivel">
                                    <img src="imagenes/img1.jpg" alt="img1">
                                </div>
                                <p class="nombre">Gabriela</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="js/calculadora-enlases.js"></script>
    <script src="js/barraUsuario.js"></script>
</body>
</html>