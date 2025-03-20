<?php

echo "<h1>Hola soy el archivo php</h1>";

$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "empresanm";

$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

if ($conexion) {
    echo "Estoy conectado a empresanm";
} else {
    echo "no estoy conectado";
}


$consulta = "select * from usuario";
$result = $conexion->query($consulta);

echo $result->num_rows;
if ($result->num_rows > 0) {
    while ($fila = $result->fetch_assoc()) {
        echo "ID: " . $fila["id"] . " - Nombre: " . $fila["nombre"] . " - Email: " . $fila["email"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}

echo $result;
