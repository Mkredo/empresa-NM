<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modulo de Compras</title>
  </head>
  <style>
    .section {
    margin: 20px;
    padding: 20px;
    background-color:rgb(216, 108, 114); /* Cambia el color a tu preferencia */
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
  <body>
    <h1>Hola soy el modulo de Compras</h1>
        <div class="section">
            <h2>Lista de Productos</h2>
            <ul>
                <li>Producto 1 - $100</li>
                <li>Producto 2 - $150</li>
                <li>Producto 3 - $200</li>
            </ul>
        </div>
    <?php
    include 'conexion.php';
    ?>
  </body>
</html>

