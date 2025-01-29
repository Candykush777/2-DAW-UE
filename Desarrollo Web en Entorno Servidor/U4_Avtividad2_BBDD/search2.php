<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la Busqueda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    
    <link rel="stylesheet" href="./Utils/css/style.css">


</head>
<body class="bg-light">

<h1 class="text-center mb-5 mt-4">Resultados de la Busqueda</h1>

<div class="container">


<?php 

$conexion=mysqli_connect('localhost','root','','concesionario');


if (!$conexion) {

    die("Error al establecer la conexión" . mysqli_connect_error());
}

//usamos ternarios para no aargar el código , es lo mismo que if ,else 

$marca =   isset($_REQUEST['marca']) ? mysqli_real_escape_string($conexion,trim(strip_tags($_REQUEST['marca']))) : "";
$modelo =  isset($_REQUEST['modelo']) ? mysqli_real_escape_string($conexion,trim(strip_tags($_REQUEST['modelo']))) : "";

$sql="SELECT id, marca, modelo, año FROM coches WHERE 1=1";

if (!empty ($marca)) {


    $sql .= " AND marca LIKE '%$marca%'"; //salia error por no dejar espacio en AND antes al juntarse con la sentencia anterior
}

if (!empty ($modelo)) {


    $sql .= " AND modelo LIKE '%$modelo%'";
}


$result = mysqli_query($conexion,$sql);


if (mysqli_num_rows($result) > 0) {

    echo '<table class="table table-striped table-bordered">';
    echo '<thead class="table-dark"><tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                </tr></thead>';
        echo '<tbody>';

        
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

    echo '<div class="alert alert-danger" role="alert">No coinciden vehiculos con la busqueda</div>';

}

mysqli_close($conexion);
?>
<a href="search1.php">Volver al menú</a>


</div>

</body>

</html>