<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
            padding: 40px;
            border: 2px solid #333;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            /* Organiza los elementos verticalmente */
            gap: 20px;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
        }

        strong {
            color: #007bff;
        }

        p.error {
            color: red;
            font-weight: bold;
        }

        .btn-volver {
            padding: 8px 10px;
            font-size: 16px;
            background-color: grey;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            border: solid #333 2px;

        }

        .btn-volver:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        $a = $_REQUEST['numero1'];
        $b = $_REQUEST['numero2'];
        $operacion = $_REQUEST['operaciones']; // Recibimos el valor del botón pulsado

        switch ($operacion) {
            case 'suma':
                echo "<p>El resultado de realizar la suma de $a y $b es: <strong>" . ($a + $b) . "</strong></p>";
                break;

            case 'resta':
                echo "<p>El resultado de realizar la resta de $a y $b es: <strong>" . ($a - $b) . "</strong></p>";
                break;

            case 'producto':
                echo "<p>El resultado de realizar el producto de $a y $b es: <strong>" . ($a * $b) . "</strong></p>";
                break;

            case 'cociente':
                if ($b != 0) {
                    echo "<p>El resultado de realizar el cociente de $a y $b es: <strong>" . ($a / $b) . "</strong></p>";
                } else {
                    echo "<p class='error'>Error: No se puede dividir entre cero.</p>";
                }
                break;

            default:
                echo "<p class='error'>Operación no válida.</p>";
                break;
        }
        ?>
        <div class="boton">
            <a href="operaciones.php" class="btn-volver">Volver a Operaciones</a>
        </div>
    </div>
</body>

</html>