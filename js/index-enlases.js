document.addEventListener("DOMContentLoaded", function() {
    const baseUrl = "http://localhost/Wiki/";

    document.getElementById("miBoton1").onclick = function() {
        window.location.href = baseUrl + "directorio_personajes.html";
    };

    document.getElementById("miBoton2").onclick = function() {
        window.location.href = baseUrl + "directorio_armas.html";
    };

    document.getElementById("miBoton3").onclick = function() {
        window.location.href = baseUrl + "directorio_enemigos.html";
    };

    document.getElementById("miBoton4").onclick = function() {
        window.location.href = baseUrl + "calculadora.html";
    };

    document.getElementById("miBoton5").onclick = function() {
        window.location.href = baseUrl + "historia_deseos.html";
    };

    document.getElementById("miBoton6").onclick = function() {
        window.location.href = baseUrl + "historia_deseos.html";
    };
});
