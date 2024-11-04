// Filtro 1
document.getElementById('filter-toggle1').addEventListener('click', function() {
    const options = document.getElementById('filter-options1');
    options.classList.toggle('hidden');
});

const checkboxes1 = document.querySelectorAll('#filter-options1 input[type="checkbox"]');
document.getElementById('apply-filters1').addEventListener('click', updateSelectedOptions1);
document.getElementById('reset-filters1').addEventListener('click', resetFilters1);

function updateSelectedOptions1() {
    const selectedValues1 = Array.from(checkboxes1)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.value);
    //selectedOptionsDiv.textContent = 'Seleccionadas: ' + selectedValues1.join(', ');
}

function resetFilters1() {
    checkboxes1.forEach(checkbox => {
        checkbox.checked = false;
    });
    updateSelectedOptions1();
}

// Filtro 2
document.getElementById('filter-toggle2').addEventListener('click', function() {
    const options = document.getElementById('filter-options2');
    options.classList.toggle('hidden');
});

const checkboxes2 = document.querySelectorAll('#filter-options2 input[type="checkbox"]');
document.getElementById('apply-filters2').addEventListener('click', updateSelectedOptions2);
document.getElementById('reset-filters2').addEventListener('click', resetFilters2);

function updateSelectedOptions2() {
    const selectedValues2 = Array.from(checkboxes2)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.value);
    //selectedOptionsDiv.textContent = 'Seleccionadas: ' + selectedValues2.join(', ');
}

function resetFilters2() {
    checkboxes2.forEach(checkbox => {
        checkbox.checked = false;
    });
    updateSelectedOptions2();
}

// Función para alternar el estado del checkbox
function toggleCheckbox(element) {
    const checkbox = element.querySelector('input[type="checkbox"]');
    checkbox.checked = !checkbox.checked;
}

// Añadir evento a los contenedores
document.querySelectorAll('.label-container').forEach(container => {
    container.addEventListener('click', function(e) {
        const checkbox = this.querySelector('input[type="checkbox"]');
        checkbox.checked = !checkbox.checked; // Cambia el estado del checkbox
    });
});

// Añadir evento directamente a los checkboxes para que no propaguen el evento
document.querySelectorAll('.label-container input[type="checkbox"]').forEach(checkbox => {
    checkbox.addEventListener('click', function(e) {
        e.stopPropagation(); // Evita que el click se propague al contenedor
    });
});

// Filtro 3
document.getElementById('filter-toggle3').addEventListener('click', function() {
    const options = document.getElementById('filter-options3');
    options.classList.toggle('hidden');
});

const checkboxes3 = document.querySelectorAll('#filter-options3 input[type="checkbox"]');
document.getElementById('apply-filters3').addEventListener('click', updateSelectedOptions3);
document.getElementById('reset-filters3').addEventListener('click', resetFilters3);

function updateSelectedOptions3() {
    const selectedValues3 = Array.from(checkboxes3)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.value);
    //selectedOptionsDiv.textContent = 'Seleccionadas: ' + selectedValues3.join(', ');
}

function resetFilters3() {
    checkboxes3.forEach(checkbox => {
        checkbox.checked = false;
    });
    updateSelectedOptions3();
}


// Función para aplicar los filtros combinados
function applyCombinedFilters() {
    const elementosSeleccionados = Array.from(checkboxes1)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.getAttribute('data-filter'));

    const armasSeleccionadas = Array.from(checkboxes2)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.getAttribute('data-filter'));

    const rarezasSeleccionadas = Array.from(checkboxes3)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.getAttribute('data-filter'));

    const personajes = document.querySelectorAll('.prueba.cursor');

    personajes.forEach(personaje => {
        const personajeElemento = personaje.getAttribute('data-filter-elemento');
        const personajeArma = personaje.getAttribute('data-filter-arma');
        const personajeRareza = personaje.getAttribute('data-filter-rareza');

        const coincideElemento = elementosSeleccionados.length === 0 || elementosSeleccionados.includes(personajeElemento);
        const coincideArma = armasSeleccionadas.length === 0 || armasSeleccionadas.includes(personajeArma);
        const coincideRareza = rarezasSeleccionadas.length === 0 || rarezasSeleccionadas.includes(personajeRareza);

        if (coincideElemento && coincideArma && coincideRareza) {
            personaje.style.display = 'block';
        } else {
            personaje.style.display = 'none';
        }
    });
}
                                                                                                         
// Función para aplicar los filtros combinados
function applyCombinedFilters() {
    const elementosSeleccionados = Array.from(checkboxes1)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.getAttribute('data-filter'));

    const armasSeleccionadas = Array.from(checkboxes2)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.getAttribute('data-filter'));

    const rarezasSeleccionadas = Array.from(checkboxes3)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.getAttribute('data-filter'));

    const personajes = document.querySelectorAll('.prueba.cursor');

    personajes.forEach(personaje => {
        const personajeElemento = personaje.getAttribute('data-elemento');
        const personajeArma = personaje.getAttribute('data-arma');
        const personajeRareza = personaje.getAttribute('data-rareza');

        const coincideElemento = elementosSeleccionados.length === 0 || elementosSeleccionados.includes(personajeElemento);
        const coincideArma = armasSeleccionadas.length === 0 || armasSeleccionadas.includes(personajeArma);
        const coincideRareza = rarezasSeleccionadas.length === 0 || rarezasSeleccionadas.includes(personajeRareza);

        if (coincideElemento && coincideArma && coincideRareza) {
            personaje.style.display = 'block';
        } else {
            personaje.style.display = 'none';
        }
    });
}

// Event listeners para aplicar filtros
document.getElementById('apply-filters1').addEventListener('click', applyCombinedFilters);
document.getElementById('apply-filters2').addEventListener('click', applyCombinedFilters);
document.getElementById('apply-filters3').addEventListener('click', applyCombinedFilters);

// Event listeners para resetear filtros
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
