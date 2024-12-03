<?php
session_start();  //Iniciamos la sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $_SESSION['nombre'] = trim(strip_tags($_POST['nombre'])); //guarda la variable nombre en la sesion

    /* $mensaje = "El nombre ha sido guardado correctamente."; */
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escribir Nombre</title>
</head>

<body>
    <h2>Escribe tu nombre</h2>
    <div class="container">
        <form action="#" method="post">

            <label for="nombre">Nombre : </label><br>
            <input type="text" name="nombre" id="nombre" required><br>
            <button type="submit">Guardar</button>
        </form>
    </div>
    <div><p><a href="index.php">Volver Menú Principal</a></p></div>
</body>

</html>