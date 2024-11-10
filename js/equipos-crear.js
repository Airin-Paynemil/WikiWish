// Función para manejar la selección de personajes y mostrar las imágenes
function selectCharacter(card, imgURL) {
    const checkbox = card.querySelector('input[type="checkbox"]');
    const selectedCards = document.querySelectorAll('.character-card.selected');
    const selectedSlots = document.querySelectorAll('#selected-characters .selected-slot');

    if (!checkbox.checked && selectedCards.length >= 4) {
        alert("Solo puedes seleccionar hasta 4 personajes.");
        return;
    }

    // Alternar selección
    checkbox.checked = !checkbox.checked;
    card.classList.toggle('selected', checkbox.checked);

    // Actualizar visualización de personajes seleccionados
    updateSelectedCharacters();
}

function updateSelectedCharacters() {
    const selectedCards = document.querySelectorAll('.character-card.selected');
    const selectedSlots = document.querySelectorAll('#selected-characters .selected-slot');

    // Limpiar todos los slots
    selectedSlots.forEach(slot => slot.innerHTML = '');

    // Llenar los slots con las imágenes seleccionadas
    selectedCards.forEach((card, index) => {
        if (index < 4) { // Asegura el límite de 4
            const img = card.querySelector('img').cloneNode();
            selectedSlots[index].appendChild(img);
        }
    });
}

