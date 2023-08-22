// Esperar a que el DOM esté completamente cargado
document.addEventListener("DOMContentLoaded", function() {
    // Encontrar el elemento con la clase woocommerce-product-gallery__trigger
    var triggerElement = document.querySelector(".woocommerce-product-gallery__trigger");
  
    if (triggerElement) {
      // Crear un nuevo contenedor div
      var container = document.createElement("div");
      container.classList.add("mi-contenedor"); // Agregar una clase al contenedor si es necesario
  
      // Insertar el contenedor antes del elemento de disparo y mover el elemento dentro del contenedor
      triggerElement.parentNode.insertBefore(container, triggerElement);
      container.appendChild(triggerElement);
    }
  });