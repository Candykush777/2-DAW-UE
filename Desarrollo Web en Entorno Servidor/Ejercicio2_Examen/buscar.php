<?php 

$conexion = mysqli_connect('localhost', 'root', '', 'examen2');

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

$id = $_GET['idBusqueda'];

$sql = "SELECT * FROM ordenador WHERE id = $id";
$resultado = mysqli_query($conexion, $sql);

echo "<!DOCTYPE html>
<html lang='es'>
<head>
  <meta charset='UTF-8'>
  <title>Resultado de Búsqueda</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body>
<div class='container mt-4'>";

if (mysqli_num_rows($resultado) > 0) {
    echo "<h2>Resultado de la búsqueda</h2>
          <table class='table table-bordered'>
            <thead>
              <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Nombre</th>
                <th>Vendido</th>
                <th>Precio</th>
              </tr>
            </thead>
            <tbody>";

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
                <td>{$fila['id']}</td>
                <td>{$fila['fecha']}</td>
                <td>{$fila['nombre']}</td>
                <td>" . ($fila['vendido'] ? 'Sí' : 'No') . "</td>
                <td>{$fila['precio']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "<p>No se encontró ningún registro con ese ID.</p>";
}

echo "<a href='index.html' class='btn btn-secondary mt-3'>Volver al menú</a>
</div>
</body>
</html>";

mysqli_close($conexion);
?>



