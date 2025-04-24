<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $stmt = $conexion->prepare("UPDATE pagos SET referencia = '' WHERE id = ?");
    if ($stmt === false) {
        die("Error en prepare: " . $conexion->error);
    }

    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: http://localhost:8080/empresanm/pagos/");
        exit;
    } else {
        echo "<p class='alert alert-danger'>Error al borrar el dato: " . $stmt->error . "</p>";
    }

    $stmt->close();
}
?>