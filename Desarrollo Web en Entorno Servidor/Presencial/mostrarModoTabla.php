<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center mb-4">Listado de Pedidos</h1>

    <?php 
    $archivo = "pedidos.txt";

    if (file_exists($archivo)) {
        $archivoAbierto = fopen($archivo, "r");

        echo '<table class="table table-striped table-bordered">';
        echo '<thead class="table-dark"><tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Producto</th>
                <th>Cantidad</th>
            </tr></thead>';
        echo '<tbody>';

        while (($linea = fgets($archivoAbierto)) !== false) {
            $arrayDatos = explode("|", $linea);

            echo '<tr>';
            echo "<td>{$arrayDatos[0]}</td>";
            echo "<td>{$arrayDatos[1]}</td>";
            echo "<td>{$arrayDatos[2]}</td>";
            echo "<td>{$arrayDatos[3]}</td>";
            echo "<td>{$arrayDatos[4]}</td>";
            echo "<td>{$arrayDatos[5]}</td>";
            echo "<td>{$arrayDatos[6]}</td>";
            echo "<td>{$arrayDatos[7]}</td>";
            echo '</tr>';
        }

        echo '</tbody></table>';
        echo '<div class="alert alert-success" role="alert">Los datos se han mostrado correctamente.</div>';

        fclose($archivoAbierto);
    } else {
        echo '<div class="alert alert-danger" role="alert">El archivo no existe.</div>';
    }

    echo '<a href="index.php" class="btn btn-primary mt-4">Volver al Menú Principal</a>';
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>
