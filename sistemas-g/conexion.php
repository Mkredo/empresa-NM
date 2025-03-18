<?php

echo"Hola soy el archivo php";

$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "empresanm";

$conexion = new mysqli($servidor,$usuario,$password,$base_datos);
if ($conexion) {
    echo "estoy conectado";
}
else {
    echo "no estoy conectado";
}


$consulta = "select * from usuarios";
$result = $conexion->query($consulta);

while ($fila = $result->fetch_assoc()){
    echo " ID: " . $fila["id"] . "Nombre". $fila["nombre_usuario"] ."Nickname". $fila["nickname"] . "<br>";
}

echo $result; 