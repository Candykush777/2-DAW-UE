<?php

session_start();
//esta linea de abajo es para seguridad sino es post no envia nada 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $_SESSION['apellidos'] = trim(strip_tags($_POST['apellidos']));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escribir Apellidos</title>
</head>

<body>
    <h2>Escribe tus apellidos</h2>
    <div class="container">
    <form action="#" method="post">
        <label for="apellidos">Apellidos : </label><br>
        <input type="text" name="apellidos" id="apellidos" required><br>
        <button type="submit">Guardar</button>
    </form>
    </div>
    <div><p><a href="index.php">Volver Menú Principal</a></p></div>
</body>

</html>