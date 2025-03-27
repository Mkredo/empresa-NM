<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Finanzas</title>
    <style type="text/css">
      body{
        background-color:rgb(61, 98, 75);
      }
      h1{
        color: white;
      }
      
    </style>
    <?php
    include 'conexion.php';

    ?>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Módulo de Finanzas</a>
        <button class="navbar-toggler" type="button"  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/empresa-Nm">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Opciones
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
           
          </ul>
          
        </div>
      </nav>

<body>
<div class="container text-center p-4">

    

    <table class="table table-dark">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre </th>
          <th scope="col">Cantidad</th>
          <th scope="col">Fecha</th>
          <th scope="col">Mode de pago</th>
          <th scope="col">Referencia</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($result as $key => $value) {
        ?>
          <tr>
            <th scope="row"><?php echo $key + 1; ?></th>
            <td><?php echo $value['nombre'] ?></td>
            <td>O<?php echo $value['cantidad'] ?></td>
            <td>O<?php echo $value['fecha'] ?></td>
            <td>O<?php echo $value['mododepago'] ?></td>
            <td>O<?php echo $value['referencia'] ?></td>
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
    <button data-bs-toggle="modal" data-bs-target="#modalClientes" type="button" class="btn btn-success">NUEVO PAGO</button>

    <div class="modal fade" id="modalClientes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ingresa Datos del Pago</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <label for="">Nombre:</label>
            <input type="text" class="form-control">
            <label for="">Cantidad:</label>
            <input type="text" class="form-control">
            <label for="">Fecha:</label>
            <input type="text" class="form-control">
            <label for="">Modo de pago:</label>
            <input type="text" class="form-control">
            <label for="">Referencia:</label>
            <input type="text" class="form-control">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Guardar Datos</button>
          </div>
        </div>
      </div>
    </div>

  </div>
      
      
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
