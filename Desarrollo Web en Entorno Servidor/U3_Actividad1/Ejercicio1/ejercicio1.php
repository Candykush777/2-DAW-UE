<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>

<body>
    <?php
    $a = $_GET['a'];
    $b = $_GET['b'];
    $operacion = $_GET['operaciones']; // Recibimos el valor del botón pulsado
    switch ($operacion) {
        case 'Sumar':
            echo "<p>La suma es de $a mas $b: </p>", $a + $b;

            break;
        case 'Restar':
            echo "<p>La resta es de $a menos $b: </p>", $a - $b;
            break;

        case 'Multiplicar':
            echo "<p>La multiplicación es de $a x $b: </p>", $a * $b;
            break;
        case 'Dividir':

            echo "<p>La division es de $a / $b: </p>", $a / $b;
            break;

        default:
            echo "<p>Operacion no valida</p>";
            break;
    }
    ?>
</body>

</html>