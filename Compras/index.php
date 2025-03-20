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
  <>
    <h1>Hola soy el modulo de Compras</h1>
        <div class="section">
            <h2>Lista de Productos</h2>
            <ul>
                <li>Producto 1 - $100</li>
                <li>Producto 2 - $150</li>
                <li>Producto 3 - $200</li>
                <li>Producto 4 - $250</li>
                <li>Producto 5 - $300</li>
            </ul>
        </div>
    <?php
    include 'conexion.php';
    ?>
   
   <div class="content text-center p-4">

<table class="table p-4">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      <th scope="col">Fecha</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($result as $key => $value) {
    ?>
      <tr>
        <th scope="row"><?php echo $key + 1; ?></th>
        <td><?php echo $value['producto'] ?></td>
        <td>O<?php echo $value['cantidad'] ?></td>
        <td>O<?php echo $value['precio'] ?></td>
        <td>O<?php echo $value['fecha'] ?></td>
        <td>O<?php echo $value['total'] ?></td>
        <td>
          <button type="button" class="btn btn-primary">EDITAR</button>
          <button type="button" class="btn btn-danger">ELIMINAR</button>
          <button type="button" class="btn btn-info">VER</button>
        </td>
      </tr>
    <?php
    }
    ?>

  </tbody>
</table>
</div>
