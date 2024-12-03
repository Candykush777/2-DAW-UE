<?php
session_start();

if (isset($_POST['borrar'])) {

    session_unset(); // nos aseguramso de limpiar las variables
    session_destroy(); // destruye la sesión peor por si solo tarda unos segundos y por eso hay que poner unset antes.
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Información</title>
</head>

<body>

    <h2>Eliminar Información de la sesión</h2>

    <form action="#" for="borrarSesion" method="post">
        <input type="submit" name="borrar" value="Borrar la información" />
    </form><br>

    <a href="index.php">Volver al menú principal</a>
</body>

</html>