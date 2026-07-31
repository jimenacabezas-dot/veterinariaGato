const cuerpo = document.querySelector("body");
const botonModo = document.querySelector("#btn-tema");

let esDeDia = true;

function alternarModo() {

    cuerpo.classList.toggle("modo-oscuro");

    esDeDia = !esDeDia;

    if (esDeDia) {
        botonModo.textContent = "Modo Noche 🌙";
    } else {
        botonModo.textContent = "Modo Día ☀";
    }
}

botonModo.addEventListener("click", alternarModo);