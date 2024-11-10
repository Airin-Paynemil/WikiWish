document.addEventListener("DOMContentLoaded", function() {

    document.getElementById("miBoton1").onclick = function() {
        window.location.href = "http://localhost/Wiki/directorio_personajes.php";
    };

    document.getElementById("miBoton2").onclick = function() {
        window.location.href = "http://localhost/Wiki/directorio_armas.php";
    };

    document.getElementById("miBoton3").onclick = function() {
        window.location.href = "http://localhost/Wiki/directorio_enemigos.php";
    };

    document.getElementById("miBoton4").onclick = function() {
        window.location.href = "http://localhost/Wiki/equipos.php";
    };
});
