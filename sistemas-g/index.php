<!DOCTYPE html>
<html lang="en">

  <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Modulo de sistemas</title>
</head>

<body>
  <h1 class="text-center">Modulo de sistemas</h1>
  <div class="Seccion"></div>
  <?php
  include 'conexion.php';

  ?>

  <div class="container text-center p-4">

    <button data-bs-toggle="modal" data-bs-target="#modalCompras" type="button" class="btn btn-success">NUEVO PRODUCTO</button>

    <table class="table p-4 mt-4">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">descripcion</th>
          <th scope="col">ocupante</th>
          <th scope="col">departamento</th>
        </tr>
      </thead>
      <tbody>
        <?php
         foreach ($result as $key => $value) {

        ?>
          <tr>
            <th scope="row"><?php echo $key + 1; ?></th>
            <td><?php echo $value['descripcion'] ?></td>
            <td><?php echo $value['ocupante'] ?></td>
            <td><?php echo $value['departamento'] ?></td>
            <td>       

              <!-- Botón EDITAR -->
<button 
    class="btn btn-warning editarBtn" 
    data-id="<?php echo $fila['id']; ?>"
    data-producto="<?php echo $fila['descripcion']; ?>"
    data-precio="<?php echo $fila['ocupante']; ?>"
    data-cantidad="<?php echo $fila['departamento']; ?>
    data-bs-toggle="modal" 
    data-bs-target="#modalEditar">
    EDITAR
</button>
              <!-- editar datos -->
  <script>
  // Detectar click en el botón de editar
  document.querySelectorAll('.editarBtn').forEach(button => {
    button.addEventListener('click', function() {
      document.getElementById('edit-id').value = this.dataset.id;
      document.getElementById('edit-descripcion').value = this.dataset.descripcion;
      document.getElementById('edit-ocupante').value = this.dataset.ocupante;
      document.getElementById('edit-departamento').value = this.dataset.departamento;
    });
  });
</script>


               <!-- EDITAR -->
<div class="modal fade" id="modalEditar" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <form action="editar.php" method="POST" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar descripcion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
          <div class="modal-body container-fluid">
          <form action="editar.php" method="POST">
            <label for="">id</label>     
            <input type="number" name= "id" name="edit-id" class="form-control">                           
            <label for="">descripcion</label>
            <input type="text" name="descripcion" id="edit-descripcion" class="form-control">
            <label for="">ocupante</label>
            <input type="number" name="ocupante" id="edit-ocupante" class="form-control">
            <label for="">departamento</label>
            <input type="number" name="departamento" id="edit-departamento" class="form-control">
            </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
               <button type="submit" class="btn btn-primary">Actualizar</button>
             </div>
          </form>

        </div>
      </div>
    </div>

            </td>
          </tr>
        <?php
        
        ?>
          <tr>
            <th scope="row"><?php echo $key + 1; ?></th>
            <td><?php echo $value['descripcion'] ?></td>
            <td><?php echo $value['ocupante'] ?></td>
            <td><?php echo $value['departamento'] ?></td>
        <?php 
        }
        ?>
        

      </tbody>
    </table>

    <div class="modal fade" id="modalCompras" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ingresa descripcion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <label for="">id</label>     
            <input type="number" name= "id" name="edit-id" class="form-control">                           
            <label for="">descripcion</label>
            <input type="text" name="descripcion" id="edit-descripcion" class="form-control">
            <label for="">ocupante</label>
            <input type="number" name="ocupante" id="edit-ocupante" class="form-control">
            <label for="">departamento</label>
            <input type="number" name="departamento" id="edit-departamento" class="form-control">
          </div>
          <div class="modal-body container-fluid">
          <form action="insertardatos.php" method="POST">
            
            <button type="button" class="btn btn-secondary mt-5" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary mt-5">Guardar Datos</button>
          </form>

        </div>
      </div>
    </div>

  </div>







</body>

</html>