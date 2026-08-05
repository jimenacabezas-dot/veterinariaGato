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

/**formulario si */
function mostrarFormulario() {
    const formulario = document.getElementById("formulario");

    if (formulario.style.display === "none" || formulario.style.display === "") {
        formulario.style.display = "block";
    } else {
        formulario.style.display = "none";
    }
}
const formularioProducto = document.querySelector("#formProducto");
const mensajeProducto = document.querySelector("#mensaje-producto");

function revisarProducto(event) {
    event.preventDefault();

    const nombre = document.querySelector("#nombre").value;
    const categoria = document.querySelector("#categoria").value;
    const precio = document.querySelector("#precio").value;
    const stock = document.querySelector("#stock").value;

    if (nombre === "") {
        mensajeProducto.textContent = "Ingrese el nombre del producto.";
        mensajeProducto.classList.add("error");
        mensajeProducto.classList.remove("exito");
    } else {
        mensajeProducto.textContent = "Producto añadido correctamente.";
        mensajeProducto.classList.add("exito");
        mensajeProducto.classList.remove("error");

        formularioProducto.reset();
    }
}

formularioProducto.addEventListener("submit", revisarProducto);