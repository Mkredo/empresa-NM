<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Modulo de Compras</title>
</head>

<body>
  <h1 class="text-center">Hola soy el modulo de Clientes</h1>
  <div class="Seccion"></div>
  <?php
  include 'conexion.php';

  ?>

  <div class="container text-center p-4">

    <table class="table p-4">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre Usuario</th>
          <th scope="col">NickName</th>
          <th scope="col">Accciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($result as $key => $value) {
        ?>
          <tr>
            <th scope="row"><?php echo $key + 1; ?></th>
            <td><?php echo $value['nombre_usuario'] ?></td>
            <td>O<?php echo $value['nickname'] ?></td>
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




</body>

</html>