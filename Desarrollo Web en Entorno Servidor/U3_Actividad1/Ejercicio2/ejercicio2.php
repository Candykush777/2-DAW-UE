<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario Semanal</title>
</head>

<body>
    <div id="container">
        <div id="header">
            <h2>Resultado : </h2>
        </div>
        <div id="content">
            <?php

            echo " Con una jornada laboral de ",$_GET['horas'], " horas ","  el sueldo semanal de ", round($_GET['horas'] * 12), " € .";

            ?>
        </div>

    </div>

</body>

</html>