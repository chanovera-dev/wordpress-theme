// Esperar a que el DOM esté completamente cargado
document.addEventListener("DOMContentLoaded", function() {
    // Encontrar el elemento con la clase woocommerce-product-gallery__trigger
    var triggerElement = document.querySelector(".woocommerce-product-gallery__trigger");
  
    // Crear un nuevo contenedor div
    var container = document.createElement("div");
    container.classList.add("mi-contenedor"); // Agregar una clase al contenedor si es necesario
  
    // Mover el elemento de disparo dentro del nuevo contenedor
    triggerElement.parentNode.insertBefore(container, triggerElement);
    container.appendChild(triggerElement);
  });