document.addEventListener("DOMContentLoaded", function() {
    const userIcon = document.getElementById('userIcon');
    const userMenu = document.getElementById('userMenu');
  
    userIcon.addEventListener('click', function(event) {
      event.stopPropagation();
      userMenu.classList.toggle('hidden');
    });
  
    // Oculta el menú cuando se hace clic fuera de él
    document.addEventListener('click', function(e) {
      if (!userMenu.classList.contains('hidden') && !userMenu.contains(e.target)) {
        userMenu.classList.add('hidden');
      }
    });
  });
  