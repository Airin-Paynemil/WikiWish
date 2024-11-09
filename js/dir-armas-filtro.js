// Función para mostrar/ocultar opciones de filtro y cerrar los demás
function toggleFilterOptions(activeOption) {
    const filterOptions = ["filter-options1", "filter-options2", "filter-options3"];

    filterOptions.forEach(option => {
        const element = document.getElementById(option);
        if (option === activeOption) {
            element.classList.toggle("hidden");
        } else {
            element.classList.add("hidden");
        }
    });
}

// Event listeners para los botones de filtro con cierre de otros filtros
document.getElementById("filter-toggle1").addEventListener("click", () => {
    toggleFilterOptions("filter-options1");
});
document.getElementById("filter-toggle2").addEventListener("click", () => {
    toggleFilterOptions("filter-options2");
});
document.getElementById("filter-toggle3").addEventListener("click", () => {
    toggleFilterOptions("filter-options3");
});

// Función para aplicar los filtros combinados a las armas
function applyCombinedFilters() {
    const atributosSeleccionados = Array.from(document.querySelectorAll("#filter-options1 input[type='checkbox']:checked")).map(checkbox => checkbox.value);
    const tiposDeArmaSeleccionados = Array.from(document.querySelectorAll("#filter-options2 input[type='checkbox']:checked")).map(checkbox => checkbox.value);
    const calidadesSeleccionadas = Array.from(document.querySelectorAll("#filter-options3 input[type='checkbox']:checked")).map(checkbox => checkbox.value);

    const armas = document.querySelectorAll(".prueba.cursor");

    armas.forEach(arma => {
        const armaAtributo = arma.getAttribute("data-atributo");
        const armaTipo = arma.getAttribute("data-arma");
        const armaCalidad = arma.getAttribute("data-calidad");

        const coincideAtributo = atributosSeleccionados.length === 0 || atributosSeleccionados.includes(armaAtributo);
        const coincideTipo = tiposDeArmaSeleccionados.length === 0 || tiposDeArmaSeleccionados.includes(armaTipo);
        const coincideCalidad = calidadesSeleccionadas.length === 0 || calidadesSeleccionadas.includes(armaCalidad);

        arma.style.display = coincideAtributo && coincideTipo && coincideCalidad ? "block" : "none";
    });
}

// Eventos para aplicar y restablecer filtros
document.getElementById("apply-filters1").addEventListener("click", applyCombinedFilters);
document.getElementById("apply-filters2").addEventListener("click", applyCombinedFilters);
document.getElementById("apply-filters3").addEventListener("click", applyCombinedFilters);

document.getElementById("reset-filters1").addEventListener("click", () => {
    document.querySelectorAll("#filter-options1 input[type='checkbox']").forEach(checkbox => checkbox.checked = false);
    applyCombinedFilters();
});
document.getElementById("reset-filters2").addEventListener("click", () => {
    document.querySelectorAll("#filter-options2 input[type='checkbox']").forEach(checkbox => checkbox.checked = false);
    applyCombinedFilters();
});
document.getElementById("reset-filters3").addEventListener("click", () => {
    document.querySelectorAll("#filter-options3 input[type='checkbox']").forEach(checkbox => checkbox.checked = false);
    applyCombinedFilters();
});

// Cambia el estado del checkbox al hacer clic en el contenedor de la etiqueta
function toggleCheckbox(labelContainer) {
    const checkbox = labelContainer.querySelector("input[type='checkbox']");
    checkbox.checked = !checkbox.checked;
}

// Event listeners para alternar el checkbox al hacer clic en el contenedor de la etiqueta
document.querySelectorAll(".label-container").forEach(container => {
    container.addEventListener("click", function() {
        toggleCheckbox(this);
    });
});
