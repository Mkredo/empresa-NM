<?php

include 'conexion.php';

// Verificar si se ha enviado el ID del registro a eliminar
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el registro
    $sql = "DELETE FROM compras WHERE id = $id";
    if ($conexion->query($sql) === TRUE) {
        // Redireccionar al listado principal
        header("Location: index.php");
        exit();
    } else {
        echo "Error al eliminar: " . $conexion->error;
    }
} else {
    echo "ID no recibido";
}

$conexion->close();
?>
