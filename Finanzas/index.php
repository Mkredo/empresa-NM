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
    
</head>
<body>
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
      <br><br><br>
      <h1 class="display-4">Pagos</h1>
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
      
      <?php
        $servername = "localhost"; // O la dirección de tu servidor MySQL
        $username = "root";
        $password = "";
        $dbname = "fina";

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexión
        if ($conn->connect_error) {
          die("Conexión fallida: " . $conn->connect_error);
        }

        // Consulta SQL
        $sql = "SELECT * FROM pagos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // Mostrar datos de cada fila
          echo "<table border='1'>";
          echo "<tr>";
          echo "<td>ID</td>";
          echo "<td>Nombre</td>";
          echo "<td>Medida</td>";
          echo "<td>Precio</td>";
          echo "<td>Cantidad</td>";  
          echo "</tr>";
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["nombre"]."</td>";
            echo "<td>".$row["cantidad"]."</td>";
            echo "<td>".$row["fecha"]."</td>";
            echo "</tr>";
          }
          //while($row = $result->fetch_assoc()) {
            //echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Medida: " . $row["medida"]. " - Precio: " . $row["precio"]." - Cantidad: " . $row["cantidad"]."<br>";
          //}
        } else {
          echo "0 resultados";
        }


?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
