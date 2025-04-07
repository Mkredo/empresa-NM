<?php

include 'conexion.php';

// Insertar datos si el formulario es enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];
    $total = $_POST['total'];

    $sql = "INSERT INTO compras VALUES ($id,'$producto', '$precio', '$cantidad', '$fecha', '$total')";
    // $sql = "INSERT INTO compras VALUES ($id,'$producto', '$precio', '$cantidad', '$fecha', '$total')";
    if ($conexion->query($sql) === TRUE) {
        header("Location: http://localhost:8080/empresa-Nm/compras/");
    } else {
        echo "<p class='alert alert-danger'>Error: " . $conexion->error . "</p>";
    }
}
?>