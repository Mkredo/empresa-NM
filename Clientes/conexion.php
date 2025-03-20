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


$consulta = "select * from usuario";
$result = $conexion->query($consulta);
if ($result->num_rows > 0) {
    while ($fila = $result->fetch_assoc()) {
        // echo "ID: " . $fila["id"] . " - Nombre: " . $fila["nombre_usuario"] . " - Usuario: " . $fila["nickname"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}
