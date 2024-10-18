document.getElementById('filterInput').addEventListener('keyup', function() {
    let filterValue = document.getElementById('filterInput').value.toLowerCase();
    let items = document.getElementById('itemsList').getElementsByTagName('li');

    Array.from(items).forEach(function(item) {
        let itemName = item.textContent.toLowerCase();
        if (itemName.indexOf(filterValue) != -1) {
            item.style.display = '';
        } else {
            item.style.display = 'none';
        }
    });
});



document.addEventListener('DOMContentLoaded', (event) => {
    loadSelections();
});

function saveSelections() {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(checkbox => {
        localStorage.setItem(checkbox.name, checkbox.checked);
    });
}

function loadSelections() {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(checkbox => {
        const checked = localStorage.getItem(checkbox.name) === 'true';
        checkbox.checked = checked;
    });
}



document.addEventListener('DOMContentLoaded', function() {
    const filtroTipo = document.getElementById('filtro-tipo');
    const filtroListaContenido = document.getElementById('filtro-lista-contenido');

    filtroTipo.addEventListener('click', function() {
        if (filtroListaContenido.style.display === 'block') {
            filtroListaContenido.style.display = 'none';
        } else {
            filtroListaContenido.style.display = 'block';
        }
    });
});










