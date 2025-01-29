<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrado vehiculo respuesta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    
    <link rel="stylesheet" href="./Utils/css/style.css">

</head>
<body class="bg-light">

<h1 class="text-center mb-5 mt-5">Resultado de borrado</h1>
<div class="container">


<?php 


$conexion=mysqli_connect('localhost','root','','concesionario');

if (!$conexion) {


   die("Error de Conexión" . mysqli_connect_error());
}


$id= mysqli_real_escape_string($conexion, trim(strip_tags($_REQUEST['id'])));

$sql ="DELETE FROM coches WHERE id=$id";

mysqli_query($conexion, $sql);

if (mysqli_affected_rows($conexion)>0) {

    echo '<div class="alert alert-success", role="alert">Producto Borrado Exitosamente</div>';
    
}

else{

    echo '<div class="alert alert-danger" role="alert">No coinciden vehiculos con el id</div>';
}

mysqli_close($conexion);


?> 




<a href="delete1.php">Volver al menú</a>


</div>
    
</body>
</html>