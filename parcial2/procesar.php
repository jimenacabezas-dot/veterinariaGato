<?php
$productos = [
    "Cono simple" => 8,
    "Copa doble" => 15,
    "Litro para llevar" => 35
];
echo "<h1>Pedido recibido en Heladería Doña Nieve</h1>";
foreach ($productos as $producto => $precio) {
    echo "<p>$producto — Bs $precio</p>";
}

$pedido = $_POST["pedido"];
$correo = $_POST["correo"];
$sabores = $_POST["sabores"];

echo "<p>Pedido: $pedido</p>";
echo "<p>Correo: $correo</p>";
echo "<p>Sabores: $sabores</p>";