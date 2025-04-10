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


$consulta = "select * from sistemas-g";
$result = $conexion->query($consulta);

while ($fila = $result->fetch_assoc()) {
    echo " id: " . $fila["id"] . "descripcion" . $fila["descripcion"] . "ocupante" . $fila["ocupante"] . "departamento" . $fila["departamento"] . "<br>";
}
