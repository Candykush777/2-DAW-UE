<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Coches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    
    <link rel="stylesheet" href="./Utils/css/style.css">
</head>
<body class="bg-light">

<h1 class="text-center mt-4 mb-4">Listado de Vehículos</h1>

<div class="container listado">


<?php 

$conexion = mysqli_connect('localhost','root','Viewsonic1981','concesionario');

if (!$conexion) {


    die("conexión Fallida" . mysqli_connect_error());
}

$sql = "SELECT id, marca, modelo, año FROM coches";
$result=mysqli_query($conexion,$sql);

if (mysqli_num_rows($result) >0) {


    echo '<table class="table table-striped table-bordered">';
    echo '<thead class="table-dark"><tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                </tr></thead>';
        echo '<tbody>';

        /* mirar esto bien en apuntes */
while($row=mysqli_fetch_assoc($result)){

    echo "<tr>";
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['marca'] . '</td>';
    echo "<td>" . $row['modelo']  . "</td>";
    echo "<td>" . $row['año']  . "</td>";
    echo "</tr>";


}

echo "</tbody></table>";

echo '<div class="alert alert-success", role="alert">Los datos se han mostrado correctamente.</div>';
    
}else {

    echo '<div class="alert alert-danger" role="alert">No hay vehiculos en el store</div>';

}

mysqli_close($conexion);
?>






<a href="add1.php">Volver al menú</a>

</div>


</body>
</html>