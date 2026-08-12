const formulario = document.getElementById("form-helados");
const aviso = document.getElementById("aviso");

formulario.addEventListener("submit", function (event) {
  const pedido = document.getElementById("pedido").value;
  const sabores = document.getElementById("sabores").value;
  const correo = document.getElementById("correo").value;

  if (pedido === "" || sabores === "" || correo === "") {
    event.preventDefault();
    aviso.textContent = "Por favor, complete todos los campos si.";
  } else {
    aviso.textContent = "Enviando pedidos!..";
  }
});
