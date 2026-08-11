<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre = $_POST["nombre"];
    $categoria = $_POST["categoria"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];

    echo "<h1>Producto registrado</h1>";

    echo "<p>Nombre: $nombre</p>";
    echo "<p>Categoría: $categoria</p>";
    echo "<p>Precio: $precio</p>";
    echo "<p>Stock: $stock</p>";

} else {

    echo "<h1>No se recibió ningún producto</h1>";

}

?>