<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>


<body>

    <h1>Mostramos tabla de números aleatorios y sus cuadrados </h1>

    <table border="1">

    <tr>
        <th>Números</th>
        <th>Cuadrados</th>
    </tr>

    <!--Escribe un programa que muestre en dos columnas:  Numero -  cuadrado del numero
De 10 números aleatorios entre 5 y 20.-->
    <?php


    for ($i = 1; $i <= 10; $i++) {

        $num = rand(5, 20);

        $cuadrado = $num * $num;

        //echo "<h2> $num    --   $cuadrado </h2><br>"; seria columna simple pero queda mejor en una tabla

        echo "<tr><td>$num</td><td>$cuadrado</td></tr>";
    }

    ?>
    </table>
</body>

</html>