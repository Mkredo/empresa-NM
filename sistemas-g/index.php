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
  <h1 class="text-center">Hola soy el modulo de sistemas</h1>
  <div class="Seccion"></div>
  <?php
  include 'conexion.php';

  ?>

  <div class="container text-center p-4">

    <button data-bs-toggle="modal" data-bs-target="#modalsistemas" type="button" class="btn btn-success">NUEVO CLIENTE</button>

    <table class="table p-4 mt-4">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre Cliente</th>
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

    <div class="modal fade" id="modalsistemas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ingresa Datos del Cliente</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <label for="">Nombre de Cliente</label>
            <input type="text" class="form-control">
            <label for="">Usuario Cliente</label>
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

  <td>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditar<?php echo $value['id']; ?>">EDITAR</button>
  
  <div class="modal fade" id="modalEditar<?php echo $value['id']; ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form action="editar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $value['nombre_usuario']; ?>" required>
            <label for="nickname">Nickname:</label>
            <input type="text" name="nickname" class="form-control" value="<?php echo $value['nickname']; ?>" required>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
          </form>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
</td>
<td>
  <form action="eliminar.php" method="POST" style="display: inline;">
    <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">ELIMINAR</button>
  </form>
</td>

<td>
  <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalVer<?php echo $value['id']; ?>">VER</button>
  
  <div class="modal fade" id="modalVer<?php echo $value['id']; ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Detalles del Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p><strong>Nombre:</strong> <?php echo $value['nombre_usuario']; ?></p>
          <p><strong>Nickname:</strong> <?php echo $value['nickname']; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</td>
<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $nickname = $_POST['nickname'];

    $sql = "UPDATE clientes SET nombre_usuario = ?, nickname = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $nombre, $nickname, $id);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error al actualizar: " . $stmt->error;
    }
}
?>
<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM clientes WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error al eliminar: " . $stmt->error;
    }
}
?>






</body>

</html>