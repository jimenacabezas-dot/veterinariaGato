<?php

$nombre = $_POST["nombre"];
$categoria = $_POST["categoria"];
$precio = $_POST["precio"];
$stock = $_POST["stock"];

echo "<h1>Producto recibido</h1>";

echo "<p>Nombre: $nombre</p>";
echo "<p>Categoría: $categoria</p>";
echo "<p>Precio: $precio</p>";
echo "<p>Stock: $stock</p>";

?>