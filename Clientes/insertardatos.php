<?php

include 'conexion.php';

// Insertar datos si el formulario es enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre_usuario'];
    $nickname = $_POST['nickname'];


    $sql = "INSERT INTO usuario VALUES ($id,'$nombre', '$nickname')";
    if ($conexion->query($sql) === TRUE) {
        header("Location: http://localhost:8080/empresa-Nm/clientes/");
    } else {
        echo "<p class='alert alert-danger'>Error: " . $conn->error . "</p>";
    }
}
