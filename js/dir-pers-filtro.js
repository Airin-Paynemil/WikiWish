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

// Event listeners para los botones de filtro
document.getElementById("filter-toggle1").addEventListener("click", () => {
    toggleFilterOptions("filter-options1");
});
document.getElementById("filter-toggle2").addEventListener("click", () => {
    toggleFilterOptions("filter-options2");
});
document.getElementById("filter-toggle3").addEventListener("click", () => {
    toggleFilterOptions("filter-options3");
});

// Aplica los filtros al contenedor de personajes
function applyFilters() {
    const selectedElements = Array.from(document.querySelectorAll("#filter-options1 input:checked")).map(cb => cb.dataset.filter);
    const selectedWeapons = Array.from(document.querySelectorAll("#filter-options2 input:checked")).map(cb => cb.dataset.filter);
    const selectedRarities = Array.from(document.querySelectorAll("#filter-options3 input:checked")).map(cb => cb.dataset.filter);

    const items = document.querySelectorAll(".armas-contenedor .prueba");

    items.forEach(item => {
        const itemElement = item.getAttribute("data-elemento");
        const itemWeapon = item.getAttribute("data-arma");
        const itemRarity = item.getAttribute("data-rareza");

        const matchesElement = selectedElements.length === 0 || selectedElements.includes(itemElement);
        const matchesWeapon = selectedWeapons.length === 0 || selectedWeapons.includes(itemWeapon);
        const matchesRarity = selectedRarities.length === 0 || selectedRarities.includes(itemRarity);

        if (matchesElement && matchesWeapon && matchesRarity) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
}

// Eventos de aplicación de filtros
document.getElementById("apply-filters1").addEventListener("click", applyFilters);
document.getElementById("apply-filters2").addEventListener("click", applyFilters);
document.getElementById("apply-filters3").addEventListener("click", applyFilters);

// Restablece los filtros
function resetFilters() {
    document.querySelectorAll(".filter-container input[type=checkbox]").forEach(checkbox => {
        checkbox.checked = false;
    });
    applyFilters();
}

// Eventos de restablecimiento de filtros
document.getElementById("reset-filters1").addEventListener("click", resetFilters);
document.getElementById("reset-filters2").addEventListener("click", resetFilters);
document.getElementById("reset-filters3").addEventListener("click", resetFilters);

// Cambia el estado del checkbox cuando se hace clic en el contenedor de la etiqueta
function toggleCheckbox(labelContainer) {
    const checkbox = labelContainer.querySelector("input[type='checkbox']");
    checkbox.checked = !checkbox.checked;
}
