<?php
include 'conexion.php';
include 'mySQL/dir-pers-consult.php';

 // Seleccionar imagen para el elemento
$elementoImagen = '';

if ($row_DP['elemento_DP'] == 'pyro') {
    $elementoImagen = 'http://localhost/Wiki/imagenes/iconos/pyro';
} elseif ($row_DP['elemento_DP'] == 'cryo') {
    $elementoImagen = 'http://localhost/Wiki/imagenes/iconos/cryo.png';
} elseif ($row_DP['elemento_DP'] == 'anemo') {
    $elementoImagen = 'http://localhost/Wiki/imagenes/iconos/anemo.png';
} elseif ($row_DP['elemento_DP'] == 'electro') {
    $elementoImagen = 'imagenes/elementos/cryo.png';
} elseif ($row_DP['elemento_DP'] == 'dendro') {
    $elementoImagen = 'http://localhost/Wiki/imagenes/iconos/dendro.png';
} elseif ($row_DP['elemento_DP'] == 'hydro') {
    $elementoImagen = 'http://localhost/Wiki/imagenes/iconos/hydro.png';
} elseif ($row_DP['elemento_DP'] == 'geo') {
    $elementoImagen = 'http://localhost/Wiki/imagenes/iconos/geo.png';
}

// Seleccionar imagen para el arma
$armaImagen = '';

if ($row_DP['arma_DP'] == 'mandoble') {
    $armaImagen = 'http://localhost/Wiki/imagenes/iconos/mandoble.png';
} elseif ($row_DP['arma_DP'] == 'espada') {
    $armaImagen = 'http://localhost/Wiki/imagenes/iconos/espada.png';
} elseif ($row_DP['arma_DP'] == 'lanza') {
    $armaImagen = 'http://localhost/Wiki/imagenes/iconos/lanza.png';
} elseif ($row_DP['arma_DP'] == 'catalizador') {
    $armaImagen = 'http://localhost/Wiki/imagenes/iconos/catalizador.png';
} elseif ($row_DP['arma_DP'] == 'arco') {
    $armaImagen = 'http://localhost/Wiki/imagenes/iconos/arco.png';
}


?>