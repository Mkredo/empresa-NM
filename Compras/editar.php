<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];
    $total = $_POST['total'];

    $sql = "UPDATE compras SET 
        producto = '$producto',
        precio = '$precio',
        cantidad = '$cantidad',
        fecha = '$fecha',
        total = '$total'
        WHERE id = $id";

    if ($conexion->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error al actualizar: " . $conexion->error;
    }
}
?>
