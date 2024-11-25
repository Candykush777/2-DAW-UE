<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangulo</title>
    <style>
        body {

            display: flex;
            flex-direction: column;
            text-align: center;
            justify-content: center;
            padding: 50px;
            align-items: center;
            background-color: beige;
        }

        .container {

            width: 400px;
            border: solid black 2px;
            margin-top: 20px;
            padding: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            align-items: center;
            background-color: darkseagreen;
                    }

        h1{

            text-shadow: 5px 5px 10px grey
        }
    </style>


    <!-- Realizar un programa PHP que generé 2 números aleatorios (entre 5 y 15) y me dibujé un
rectángulo de asteriscos como se puesta en la figura: -->
</head>

<body>

    <h1 style="text-align : center">Rectangulo Aleatorio</h1>
    <div class="container">


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
    </div>
</body>

</html>