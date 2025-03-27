<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "empresanm";

$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

if ($conexion) {
    echo "";
} else {
    echo "no estoy conectado";
}


$consulta = "select * from inventarios";
$result = $conexion->query($consulta);
if ($result->num_rows > 0) {
    while ($fila = $result->fetch_assoc()) {
        //echo "ID: " . $fila["id"] . " producto: " . $fila["producto"] . " stock: " . $fila["stock"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}
