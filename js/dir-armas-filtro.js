// Filtro 1
document.getElementById('filter-toggle1').addEventListener('click', function() {
    const options = document.getElementById('filter-options1');
    options.classList.toggle('hidden');
});

const checkboxes1 = document.querySelectorAll('#filter-options1 input[type="checkbox"]');
document.getElementById('apply-filters1').addEventListener('click', applyCombinedFilters);
document.getElementById('reset-filters1').addEventListener('click', () => {
    checkboxes1.forEach(checkbox => checkbox.checked = false);
    applyCombinedFilters();
});

// Filtro 2
document.getElementById('filter-toggle2').addEventListener('click', function() {
    const options = document.getElementById('filter-options2');
    options.classList.toggle('hidden');
});

const checkboxes2 = document.querySelectorAll('#filter-options2 input[type="checkbox"]');
document.getElementById('apply-filters2').addEventListener('click', applyCombinedFilters);
document.getElementById('reset-filters2').addEventListener('click', () => {
    checkboxes2.forEach(checkbox => checkbox.checked = false);
    applyCombinedFilters();
});

// Filtro 3
document.getElementById('filter-toggle3').addEventListener('click', function() {
    const options = document.getElementById('filter-options3');
    options.classList.toggle('hidden');
});

const checkboxes3 = document.querySelectorAll('#filter-options3 input[type="checkbox"]');
document.getElementById('apply-filters3').addEventListener('click', applyCombinedFilters);
document.getElementById('reset-filters3').addEventListener('click', () => {
    checkboxes3.forEach(checkbox => checkbox.checked = false);
    applyCombinedFilters();
});

// Función para alternar el estado del checkbox
function toggleCheckbox(element) {
    const checkbox = element.querySelector('input[type="checkbox"]');
    checkbox.checked = !checkbox.checked;
}

// Añadir evento a los contenedores para alternar el checkbox
document.querySelectorAll('.label-container').forEach(container => {
    container.addEventListener('click', function(e) {
        toggleCheckbox(this);
    });
});

// Función para aplicar los filtros combinados a las armas
function applyCombinedFilters() {
    const atributosSeleccionados = Array.from(checkboxes1)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.value);

    const tiposDeArmaSeleccionados = Array.from(checkboxes2)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.value);

    const calidadesSeleccionadas = Array.from(checkboxes3)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.value);

    const armas = document.querySelectorAll('.prueba.cursor');

    armas.forEach(arma => {
        const armaAtributo = arma.getAttribute('data-atributo');
        const armaTipo = arma.getAttribute('data-arma');
        const armaCalidad = arma.getAttribute('data-calidad');

        const coincideAtributo = atributosSeleccionados.length === 0 || atributosSeleccionados.includes(armaAtributo);
        const coincideTipo = tiposDeArmaSeleccionados.length === 0 || tiposDeArmaSeleccionados.includes(armaTipo);
        const coincideCalidad = calidadesSeleccionadas.length === 0 || calidadesSeleccionadas.includes(armaCalidad);

        arma.style.display = coincideAtributo && coincideTipo && coincideCalidad ? 'block' : 'none';
    });
}

// Event listeners para aplicar filtros y resetear filtros en cada sección
document.getElementById('apply-filters1').addEventListener('click', applyCombinedFilters);
document.getElementById('apply-filters2').addEventListener('click', applyCombinedFilters);
document.getElementById('apply-filters3').addEventListener('click', applyCombinedFilters);

document.getElementById('reset-filters1').addEventListener('click', () => {
    checkboxes1.forEach(checkbox => checkbox.checked = false);
    applyCombinedFilters();
});
document.getElementById('reset-filters2').addEventListener('click', () => {
    checkboxes2.forEach(checkbox => checkbox.checked = false);
    applyCombinedFilters();
});
document.getElementById('reset-filters3').addEventListener('click', () => {
    checkboxes3.forEach(checkbox => checkbox.checked = false);
    applyCombinedFilters();
});
