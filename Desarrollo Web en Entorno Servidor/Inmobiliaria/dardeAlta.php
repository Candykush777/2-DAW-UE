<?php 


include 'validar_Sesion.php';

include 'conexion.php';

$calle = mysqli_real_escape_string($conexion, trim(strip_tags($_POST['calle'])));
$numero = mysqli_real_escape_string($conexion, trim(strip_tags($_POST['numero'])));
$piso = mysqli_real_escape_string($conexion, trim(strip_tags($_POST['piso'])));
$puerta = mysqli_real_escape_string($conexion, trim(strip_tags($_POST['puerta'])));
$cp = mysqli_real_escape_string($conexion, trim(strip_tags($_POST['cp'])));
$metros = mysqli_real_escape_string($conexion, trim(strip_tags($_POST['metros'])));
$zona = mysqli_real_escape_string($conexion, trim(strip_tags($_POST['zona'])));
$precio = mysqli_real_escape_string($conexion, trim(strip_tags($_POST['precio'])));
$usuario_id = mysqli_real_escape_string($conexion, trim(strip_tags($_SESSION['usuario_id'])));
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
    $sql = "INSERT INTO pisos (calle, numero, piso, puerta, cp, metros, zona, precio, imagen,usuario_id) 
            VALUES ('$calle', '$numero', '$piso', '$puerta', '$cp', '$metros', '$zona', '$precio', '$ruta_imagen','$usuario_id')";
    if (mysqli_query($conexion, $sql)) {
        echo "Inmueble añadido exitosamente";
    } else {
        echo "Error al insertar en la base de datos: " . mysqli_error($conexion);
    }
} else {
    echo "Error al mover el archivo de la imagen. Verifica los permisos de la carpeta uploads.";
}
?>
