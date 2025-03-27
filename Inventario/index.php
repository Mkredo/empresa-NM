<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Modulo de inventarios</title>
</head>

<body>
  <h1 class="text-center">inventarios</h1>
  <div class="Seccion"></div>
  <?php
  include 'conexion.php';

  ?>

  <div class="container text-center p-4">
  <button data-bs-toggle="modal" data-bs-target="#modalinventario" type="button" class="btn btn-success">NUEVO PRODUCTO</button>
  <table class="table p-4 mt-4">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">producto</th>
          <th scope="col">stock</th>
          <th scope="col">Accciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($result as $key => $value) {
        ?>
          <tr>
            <th scope="row"><?php echo $key + 1; ?></th>
            <td><?php echo $value['producto'] ?></td>
            <td>O<?php echo $value['stock'] ?></td>
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
    <div class="modal fade" id="modalinventario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ingresa Datos del producto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <label for="">ID</label>
          <input type="text" class="form-control">
            <label for="">Nombre de producto</label>
            <input type="text" class="form-control">
            <label for="">stock</label>
            <input type="text" class="form-control">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Guardar Datos</button>
          </div>
        </div>
      </div>
</body>

</html>