<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];
    $mododepago = $_POST['mododepago'];
    $referencia = $_POST['referencia'];

    // Prepara la sentencia SQL
    $stmt = $conexion->prepare("INSERT INTO pagos (`id`, `nombre`, `cantidad`, `fecha`, `mododepago`, `referencia`) VALUES (?, ?, ?, ?, ?, ?)");

    if ($stmt === false) {
        die("Error en prepare: " . $conexion->error);
    }

    // 'i' para int, 's' para string
    $stmt->bind_param("isisss", $id, $nombre, $cantidad, $fecha, $mododepago, $referencia);

    if ($stmt->execute()) {
        header("Location: http://localhost/empresa-NM/Finanzas/index.php");
        exit;
    } else {
        echo "<p class='alert alert-danger'>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}
