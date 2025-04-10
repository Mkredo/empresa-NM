<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $descripcion = $_POST['descripcion'];
    $ocupante  = $_POST['ocupante'];
    $departamento = $_POST['departamento'];
   

    $sql = "UPDATE compras SET 
        descripcion = '$descripcion',
        ocupante = '$ocupante',
        departamento = '$departamento',
        WHERE id = $id";

    if ($conexion->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error al actualizar: " . $conexion->error;
    }
}
?>