<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangulo</title>

    <!-- Realizar un programa PHP que generé 2 números aleatorios (entre 5 y 15) y me dibujé un
rectángulo de asteriscos como se puesta en la figura: -->
</head>

<body>

    <h1 style="text-align : center">Rectangulo Aleatorio</h1>
    <?php

    $alto = rand(5, 15);
    $ancho = rand(5, 15);

    echo "<p><b>Alto : $alto, <br> Ancho : $ancho</b></p>";
    echo "<pre>";

    for ($i = 0; $i < $alto; $i++) {



        for ($j = 0; $j < $ancho; $j++) {

            echo "* ";
        }
        echo "\n";
    }

    echo "</pre>";
    ?>

</body>

</html>