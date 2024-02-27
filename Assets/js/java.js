// Obtener el contenedor que tiene el desbordamiento
var container = document.getElementById("cards");

// Ocultar la barra de desplazamiento
container.style.overflow = "hidden";

// Agregar un evento para desactivar temporalmente el desbordamiento
container.addEventListener("mouseenter", function() {
    container.style.overflow = "auto";
});

// Restaurar el desbordamiento cuando el mouse sale del contenedor
container.addEventListener("mouseleave", function() {
    container.style.overflow = "hidden";
});


