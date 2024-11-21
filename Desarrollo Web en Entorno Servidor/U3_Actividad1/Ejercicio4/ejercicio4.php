<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    echo "<p>Su nombre es <b>", $_REQUEST['nombre'], "</b>.\n</p>";
    echo "<p>Sus apellidos son <b>", $_REQUEST['apellidos'], "</b>.\n<p>";
    echo "<p>Tiene entre <b>", $_REQUEST['edad'], "</b>.\n<p>";
    echo "<p>Su peso es de <b>", $_REQUEST['peso'], "</b>.\n<p>";
    echo "<p>Es un <b>", $_REQUEST['sexo'], "</b>.\n<p>";
    echo "<p>Su estado civil es <b>", $_REQUEST['estado'], "</b>.\n<p>";
    echo "<p>Le gusta: <b>" . implode("</b>, <b>", $_REQUEST['aficiones']) . "</b>.</p>";


 

    ?>
</body>

</html>