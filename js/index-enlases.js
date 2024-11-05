document.addEventListener("DOMContentLoaded", function() {
    const baseUrl = "http://localhost/Wiki/";

    document.getElementById("miBoton1").onclick = function() {
        window.location.href = baseUrl + "directorio_personajes.php";
    };

    document.getElementById("miBoton2").onclick = function() {
        window.location.href = baseUrl + "directorio_armas.php";
    };

    document.getElementById("miBoton3").onclick = function() {
        window.location.href = baseUrl + "directorio_enemigos.php";
    };

    document.getElementById("miBoton4").onclick = function() {
        window.location.href = baseUrl + "calculadora.php";
    };

    document.getElementById("miBoton5").onclick = function() {
        window.location.href = baseUrl + "historia_deseos.php";
    };

    document.getElementById("miBoton6").onclick = function() {
        window.location.href = baseUrl + "historia_deseos.php";
    };
});
