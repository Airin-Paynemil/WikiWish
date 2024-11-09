document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const fileInput = document.getElementById("file");

    form.addEventListener("submit", function (event) {
        const fileSize = fileInput.files[0]?.size || 0;

        // Valida que el archivo no supere 2 MB
        if (fileSize > 2 * 1024 * 1024) {
            alert("La imagen debe ser menor a 2 MB.");
            event.preventDefault(); // Cancela el envío del formulario
        }
    });
});
