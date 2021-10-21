// Revisar la posicion del scroll bar al inicio para dar la clase
// correcta a la imagen
adjustImage();

window.addEventListener("scroll", (event) => adjustImage());

// Revisar la posicion del scrolleo en la pagina para camiar las posicion de
// la imagen de la seccion de inicio
function adjustImage() {
    var target = document.getElementById("about-us");
    // Si el fondo de la seccion de about us se acaba de pasar
    if (window.scrollY + window.innerHeight > (target.offsetTop + target.offsetHeight)) {
        makeImageRelative();
    }
    else {
        makeImageFixed();
    }
}

function makeImageRelative() {
    var target = document.getElementById("home-img");
    target.classList.remove("fixed-img");
    target.classList.add("unfixed-img");
}

function makeImageFixed() {
    var target = document.getElementById("home-img");
    target.classList.remove("unfixed-img");
    target.classList.add("fixed-img");
}

