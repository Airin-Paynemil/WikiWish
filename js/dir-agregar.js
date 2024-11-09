function toggleForm() {
    const typeSelect = document.getElementById("tipo");
    const personajeForm = document.getElementById("personaje-form");
    const armaForm = document.getElementById("arma-form");

    // Mostrar el formulario según la selección
    if (typeSelect.value === "Personaje") {
        personajeForm.style.display = "block";
        armaForm.style.display = "none";
    } else if (typeSelect.value === "Arma") {
        armaForm.style.display = "block";
        personajeForm.style.display = "none";
    } else {
        // Ocultar ambos formularios si no se ha seleccionado nada
        personajeForm.style.display = "none";
        armaForm.style.display = "none";
    }
}
