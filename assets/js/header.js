/* arreglo del botón del menú y del menú */
function myFunction(x) {
    var nav = document.getElementById("menu-searchform-group");
    var siteBrand = document.querySelector(".site-brand a");
    x.classList.toggle("change");
    
    if (nav.className === "menu-searchform-group") {
        nav.className += " active";
        siteBrand.style.color = "var(--color-header)";
    } else {
        nav.className = "menu-searchform-group";
    }
}

/* cerrar menú si se presiona cualquier parte de la página */
let main = document.querySelector("main");

if(main.addEventListener){
    var nav = document.getElementById("menu-searchform-group");
    var button = document.querySelector(".btn-menu .bars");
    main.addEventListener('click', function(){
        if(document.querySelector(".menu-searchform-group.active")){
            nav.classList.remove('active');
            button.classList.remove('change');
        }
        
   });
}

// detecta el scroll en el sitio
const body = document.body;
const header = document.querySelector(".main-header");
const menu = document.querySelector(".main-header .menu");
const scrollUp = "scroll-up";
const scrollDown = "scroll-down";
let lastScroll = 0;

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll <= 0) {
    body.classList.remove(scrollUp);
    return;
  }
  
  if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
    // down
    body.classList.remove(scrollUp);
    body.classList.add(scrollDown);
  } else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {
    // up
    body.classList.remove(scrollDown);
    body.classList.add(scrollUp);
  }
  lastScroll = currentScroll;
});

/* da foco principal a la caja de búsqueda en el modo escritorio */
var activateSearch = document.getElementById("activate-search");
var inputSearch = document.getElementById("s");
let headerNavs = document.querySelector('#menu-searchform-group');
var menu2 = document.querySelector('.primary');
var icon1 = document.getElementById("bi-search");
var icon2 = document.getElementById("bi-x-circle");

// Evento 
activateSearch.onclick = () => {
  inputSearch.classList.toggle("activate");
  inputSearch.style.transition = "all .3s ease";
  activateSearch.classList.toggle("change-icon");
  headerNavs.classList.toggle('gap0');
  menu2.classList.toggle('font0');
 
};

if(main.addEventListener){
    main.addEventListener('click', function(){
        if(document.querySelector("#activate-search.change-icon")){
            inputSearch.classList.remove("activate");
            activateSearch.classList.toggle("change-icon");
            menu2.classList.remove('font0');
            headerNavs.classList.remove('gap0');
        }
        
   });
}