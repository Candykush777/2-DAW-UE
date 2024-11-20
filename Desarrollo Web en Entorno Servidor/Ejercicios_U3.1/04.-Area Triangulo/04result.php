<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <div id="container">
        <div id="header"><br><br>
            <h2>
                Recogida de datos por teclado</h2>


        </div>
        <div id="content">
            <?php 
            echo "El área del triangulo es : ";
            echo round(($_POST ['ancho'] * $_POST['alto']) / 2, $precision = 2), "cm<sup>2</sup>";
            ?>
        </div>

    </div>

</body>

</html>