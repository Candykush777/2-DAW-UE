<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver datos</title>
</head>
<body>
<h2>Los datos guardados son : </h2>
<?php 
if (isset($_SESSION['nombre'])) {

    $nombreLimpio =trim(strip_tags($_SESSION['nombre'] ));

    echo "<p>El nombre guardado es : $nombreLimpio</p>";


    }else{
        echo "<p>No se ha guardado ningún nombre.</p>";
    }

    if(isset($_SESSION['apellidos'])){

        $apellidosLimpio =trim(strip_tags($_SESSION['apellidos']));
        echo "<p>El apellido guardado es $apellidosLimpio</p>";
    }else{
        echo "<p>No se ha guardado ningún apellido</p>";
    }



?>
    <a href="index.php">Volver al menú principal</a>
</body>
</html>