<?php
session_start();
include 'conexion.php';

$usuario_comprador = $_SESSION['usuario_id']; // Obtener el usuario autenticado
$codigo_piso = $_POST['codigo_piso'];
$precio_final = $_POST['precio_final'];

// Insertar en la tabla 'comprados'
$sql = "INSERT INTO comprados (usuario_id, Codigo_piso, Precio_final) 
               VALUES ('$usuario_comprador', '$codigo_piso', '$precio_final')";

if (mysqli_query($conexion, $sql)) {
    // Eliminar el piso comprado de la tabla 'pisos'
    $sql_delete = "DELETE FROM pisos WHERE Codigo_piso = '$codigo_piso'";
    
    if (mysqli_query($conexion, $sql_delete)) {
        echo '<div class="alert alert-success">¡Compra realizada con éxito!</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar el piso: ' . mysqli_error($conexion) . '</div>';
    }
} else {
    echo '<div class="alert alert-danger">Error en la compra: ' . mysqli_error($conexion) . '</div>';
}

mysqli_close($conexion);
?>

