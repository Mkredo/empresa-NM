<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "empresanm";

$conexion = new mysqli($servidor, $usuario, $password, $base_datos);
if ($conexion) {
    echo "estoy conectado";
} else {
    echo "no estoy conectado";
}


$consulta = "select * from compras";
$result = $conexion->query($consulta);

while ($fila = $result->fetch_assoc()) {
    echo " ID: " . $fila["id"] . "Producto" . $fila["producto"] . "Precio" . $fila["precio"] . "Cantidad" . $fila["cantidad"] . "Fecha" . $fila["fecha"] . "Total" . $fila["total"] . "<br>";
}
