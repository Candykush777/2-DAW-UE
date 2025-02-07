<?php 
/* 
session_start(); 
*/

// Verificar que la solicitud sea POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Error: La solicitud debe ser del tipo POST.");
}

include 'conexion.php';

$calle = mysqli_real_escape_string($conexion, trim(strip_tags($_REQUEST['calle'])));
$numero = mysqli_real_escape_string($conexion, trim(strip_tags($_REQUEST['numero'])));
$piso = mysqli_real_escape_string($conexion, trim(strip_tags($_REQUEST['piso'])));
$puerta = mysqli_real_escape_string($conexion, trim(strip_tags($_REQUEST['puerta'])));
$cp = mysqli_real_escape_string($conexion, trim(strip_tags($_REQUEST['cp'])));
$metros = mysqli_real_escape_string($conexion, trim(strip_tags($_REQUEST['metros'])));
$zona = mysqli_real_escape_string($conexion, trim(strip_tags($_REQUEST['zona'])));
$precio = mysqli_real_escape_string($conexion, trim(strip_tags($_REQUEST['precio'])));

// Manejo del archivo de la imagen
$imagen = $_FILES['imagen']['name']; // Nombre original del archivo
$imagen_tmp = $_FILES['imagen']['tmp_name']; // Ubicación temporal
$imagen_error = $_FILES['imagen']['error']; // Error al subir (si lo hay)

// Verificar si hubo un error al subir la imagen
if ($imagen_error !== 0) {
    die("Error al subir la imagen. Código de error: " . $imagen_error);
}

// Definimos la carpeta donde guardaremos la imagen
$directorio = 'uploads/';
$ruta_imagen = $directorio . basename($imagen); // Ruta completa

// Movemos la imagen a la carpeta de destino
if (move_uploaded_file($imagen_tmp, $ruta_imagen)) {
    // Insertamos los datos en la base de datos, incluyendo la ruta de la imagen
    $sql = "INSERT INTO pisos (calle, numero, piso, puerta, cp, metros, zona, precio, imagen) 
            VALUES ('$calle', '$numero', '$piso', '$puerta', '$cp', '$metros', '$zona', '$precio', '$imagen')";

    if (mysqli_query($conexion, $sql)) {
        echo "Inmueble añadido exitosamente";
    } else {
        echo "Error al insertar en la base de datos: " . mysqli_error($conexion);
    }
} else {
    echo "Error al mover el archivo de la imagen. Verifica los permisos de la carpeta uploads.";
}
?>
