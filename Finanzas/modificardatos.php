<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];
    $mododepago = $_POST['mododepago'];
    $referencia = $_POST['referencia'];

    // Comprobamos si ya existe el ID
    $stmt_check = $conexion->prepare("SELECT id FROM pagos WHERE id = ?");
    $stmt_check->bind_param("i", $id);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        // Ya existe el registro → hacemos un UPDATE
        $stmt = $conexion->prepare("UPDATE pagos SET nombre = ?, cantidad = ?, fecha = ?, mododepago = ?, referencia = ? WHERE id = ?");
        $stmt->bind_param("sisssi", $nombre, $cantidad, $fecha, $mododepago, $referencia, $id);
    } else {
        echo"no existe";
        // No existe → hacemos un INSERT
        //$stmt = $conexion->prepare("INSERT INTO pagos (id, nombre, cantidad, fecha, mododepago, referencia) VALUES (?, ?, ?, ?, ?, ?)");
        //$stmt->bind_param("isisss", $id, $nombre, $cantidad, $fecha, $mododepago, $referencia);
    }

    if ($stmt->execute()) {
        header("Location: http://localhost/empresa-NM/Finanzas/index.php");
        exit;
    } else {
        echo "<p class='alert alert-danger'>Error: " . $stmt->error . "</p>";
    }

    $stmt_check->close();
    $stmt->close();
}
