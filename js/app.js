function menuToggle(){ //Menu usuario
    const toggleMenu = document.querySelector('#profilemenu');
    toggleMenu.classList.toggle('active')
}

//Menu principal
let menu = document.querySelector('#menuicon');
let navbar = document.querySelector('ul#menu');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}

//Perfil paciente
function cambiarPeso() {
 document.getElementById("pesoActual").contentEditable = true;
 document.getElementById("demo").innerHTML = "Ya puedes editar el peso.";
}

function crearReceta() {
      location.href = "crear_receta_nutri";
    }


