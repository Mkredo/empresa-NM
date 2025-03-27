<?php
include 'conexion.php';

// Insertar datos si el formulario es enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['ID'];
    $producto = $_POST['producto'];
    $stock = $_POST['Stock'];


    $sql = "INSERT INTO inventarios VALUES ($id,'$producto', '$stock')";
    if ($conexion->query($sql) === TRUE) {
        header("Location: http://localhost/empresa-Nm/inventario/");
    } else {
        echo "<p class='alert alert-danger'>Error: " . $conexion->error . "</p>";
    }
}
