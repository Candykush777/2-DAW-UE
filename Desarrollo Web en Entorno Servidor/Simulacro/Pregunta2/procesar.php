<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    $edad = mysqli_real_escape_string($conexion, $_POST['edad']);

    $sql = "INSERT INTO usuarios (nombre, email, edad) VALUES ('$nombre', '$email', '$edad')";

    if (mysqli_query($conexion, $sql)) {
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
?> 