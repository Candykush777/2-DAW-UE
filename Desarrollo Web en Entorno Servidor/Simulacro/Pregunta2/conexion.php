<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$basedatos = "nombre_de_tu_base_de_datos";

$conexion = mysqli_connect($servidor, $usuario, $password, $basedatos);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?> 