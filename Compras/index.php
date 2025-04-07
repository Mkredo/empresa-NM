<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Modulo de Compras</title>
</head>

<body>
  <h1 class="text-center">Modulo de Compras</h1>
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
          <th scope="col">Producto</th>
          <th scope="col">Precio</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Fecha</th>
          <th scope="col">Total</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($result as $key => $value) {
        ?>
          <tr>
            <th scope="row"><?php echo $key + 1; ?></th>
            <td><?php echo $value['producto'] ?></td>
            <td><?php echo $value['precio'] ?></td>
            <td><?php echo $value['cantidad'] ?></td>
            <td><?php echo $value['fecha'] ?></td>
            <td><?php echo $value['total'] ?></td>
            <td>
               <!-- Botón VER -->
               <button class="btn btn-info verBtn" 
                data-id="<?php echo $value['id']; ?>"
                data-producto="<?php echo $value['producto']; ?>"
                data-precio="<?php echo $value['precio']; ?>"
                data-cantidad="<?php echo $value['cantidad']; ?>"
                data-fecha="<?php echo $value['fecha']; ?>"
                data-total="<?php echo $value['total']; ?>"
                data-bs-toggle="modal" data-bs-target="#modalVer">
                VER
              </button>

              <!-- Botón EDITAR -->
              <button class="btn btn-warning editarBtn" 
                data-id="<?php echo $value['id']; ?>"
                data-producto="<?php echo $value['producto']; ?>"
                data-precio="<?php echo $value['precio']; ?>"
                data-cantidad="<?php echo $value['cantidad']; ?>"
                data-fecha="<?php echo $value['fecha']; ?>"
                data-total="<?php echo $value['total']; ?>"
                data-bs-toggle="modal" data-bs-target="#modalEditar">
                EDITAR
              </button>

              <!-- Botón ELIMINAR -->
              <a href="eliminar.php?id=<?php echo $value['id']; ?>" class="btn btn-danger">ELIMINAR</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <!-- MODAL NUEVO PRODUCTO -->
    <div class="modal fade" id="modalCompras" tabindex="-1">
      <div class="modal-dialog">
        <form action="insertardatos.php" method="POST" class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Nuevo Producto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <label>ID</label>
            <input type="number" name="id" class="form-control">
            <label>Producto</label>
            <input type="text" name="producto" class="form-control">
            <label>Precio</label>
            <input type="number" name="precio" class="form-control">
            <label>Cantidad</label>
            <input type="number" name="cantidad" class="form-control">
            <label>Fecha</label>
            <input type="date" name="fecha" class="form-control">
            <label>Total</label>
            <input type="number" name="total" class="form-control">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>

    <!-- MODAL VER -->
    <div class="modal fade" id="modalVer" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Detalles del Producto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <p><strong>ID:</strong> <span id="ver-id"></span></p>
            <p><strong>Producto:</strong> <span id="ver-producto"></span></p>
            <p><strong>Precio:</strong> <span id="ver-precio"></span></p>
            <p><strong>Cantidad:</strong> <span id="ver-cantidad"></span></p>
            <p><strong>Fecha:</strong> <span id="ver-fecha"></span></p>
            <p><strong>Total:</strong> <span id="ver-total"></span></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- MODAL EDITAR -->
    <div class="modal fade" id="modalEditar" tabindex="-1">
      <div class="modal-dialog">
        <form action="editar.php" method="POST" class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Editar Producto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="id" id="edit-id">
            <label>Producto</label>
            <input type="text" name="producto" id="edit-producto" class="form-control">
            <label>Precio</label>
            <input type="number" name="precio" id="edit-precio" class="form-control">
            <label>Cantidad</label>
            <input type="number" name="cantidad" id="edit-cantidad" class="form-control">
            <label>Fecha</label>
            <input type="date" name="fecha" id="edit-fecha" class="form-control">
            <label>Total</label>
            <input type="number" name="total" id="edit-total" class="form-control">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
        </form>
      </div>
    </div>

  </div>

  <script>
    // VER producto
    document.querySelectorAll('.verBtn').forEach(btn => {
      btn.addEventListener('click', function () {
        document.getElementById('ver-id').innerText = this.dataset.id;
        document.getElementById('ver-producto').innerText = this.dataset.producto;
        document.getElementById('ver-precio').innerText = this.dataset.precio;
        document.getElementById('ver-cantidad').innerText = this.dataset.cantidad;
        document.getElementById('ver-fecha').innerText = this.dataset.fecha;
        document.getElementById('ver-total').innerText = this.dataset.total;
      });
    });

    // EDITAR producto
    document.querySelectorAll('.editarBtn').forEach(btn => {
      btn.addEventListener('click', function () {
        document.getElementById('edit-id').value = this.dataset.id;
        document.getElementById('edit-producto').value = this.dataset.producto;
        document.getElementById('edit-precio').value = this.dataset.precio;
        document.getElementById('edit-cantidad').value = this.dataset.cantidad;
        document.getElementById('edit-fecha').value = this.dataset.fecha;
        document.getElementById('edit-total').value = this.dataset.total;
      });
    });
  </script>

</body>
</html>
