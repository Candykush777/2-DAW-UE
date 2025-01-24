<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Contacto</title>
    <link rel="stylesheet" href="./Utils/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</head>
<body>

<h1 class="text-center mb-4 mt-4">Buscar Contacto</h1>
<div class="container mb-5 mt-5" id="formulario">

<form class="form-control"  action="" method="get">
    <label class="form-label" for="nombrebuscado">Nombre</label>
    <input class="form-control" type="text" name="nombreBuscado" required><br>
    <label class="form-label" for="apellido1Buscado">Primer Apellido</label>
    <input class="form-control" type="text" name="apellido1Buscado" required><br>
<button type="submit">Buscar</button>
</form><br>
</div>
<?php 

// Vemos si existen los datos
if (isset($_REQUEST['nombreBuscado']) && isset($_REQUEST['apellido1Buscado'])) {

    // Limpiamos los datos
    $nombreBuscado = trim(strip_tags($_REQUEST['nombreBuscado']));
    $apellido1Buscado = trim(strip_tags($_REQUEST['apellido1Buscado']));

    $nombreFichero = "agenda.txt";
    $encontrado = false;

    // Comprobamos si el archivo existe
    if (file_exists($nombreFichero)) {

        $archivo = fopen($nombreFichero, "r");
        echo "<div class='container'><h1>Resultados de Búsqueda</h1>";

        // Leemos línea por línea 
        while (($linea = fgets($archivo)) !== false) {

            $datos = explode("|", trim($linea));

           
            if (strtolower($datos[0]) === strtolower($nombreBuscado) && strtolower($datos[1]) === strtolower($apellido1Buscado)) {
                echo "Nombre: $datos[0], Primer Apellido: $datos[1], Segundo Apellido: $datos[2], Teléfono: $datos[3], Email: $datos[4]<br>";
                $encontrado = true;
            }
        }

        fclose($archivo);

        
        if (!$encontrado) {
            echo "No se encontró ningún contacto con nombre '$nombreBuscado' y el primer apellido '$apellido1Buscado'.<br>";
        }

        echo "</div>";

    } else {
       
        echo "<div class='container'>No hay contactos guardados aún.<br></div>";
    }
}
?>

<a href="index.php">Volver al Menú Principal</a>
</body>
</html>