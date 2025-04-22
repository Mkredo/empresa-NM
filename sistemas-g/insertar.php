<?php

include 'conexion.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $descripcion = $_POST['descripcion'];
    $ocupante = $_POST['ocupante'];
    $departamento = $_POST['departamento'];
   

    $sql = "INSERT INTO compras VALUES ($id,'$descripcion', '$ocupante', '$departamento')";

    if ($conexion->query($sql) === TRUE) {
        header("Location: http://localhost:8080/empresa-Nm/compras/");
    } else {
        echo "<p class='alert alert-danger'>Error: " . $conexion->error . "</p>";
    }
}
?>