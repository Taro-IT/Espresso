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
    var target = document.getElementsByClassName("home-img");
    for(let i = 0; i < target.length; i++) {
        target[i].classList.remove("fixed-img");
        target[i].classList.add("unfixed-img");
    }
}

function makeImageFixed() {
    var target = document.getElementsByClassName("home-img");
    for(let i = 0; i < target.length; i++) {
        target[i].classList.remove("unfixed-img");
        target[i].classList.add("fixed-img");
    }
}

setInterval(changeMainImage, 4000);

let total_img = document.getElementsByClassName("main-img").length;
let current_img = 0;

function changeMainImage() {
    let fade_out_img = document.getElementById(`main-img-${current_img}`);
    fade_out_img.classList.add("home-img-hidden");

    current_img = (current_img + 1) % total_img;

    let fade_in_img = document.getElementById(`main-img-${current_img}`);
    fade_in_img.classList.remove("home-img-hidden");
}