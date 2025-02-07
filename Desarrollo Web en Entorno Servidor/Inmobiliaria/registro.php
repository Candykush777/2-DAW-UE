<?php 

include 'conexion.php'; 



$nombre = mysqli_real_escape_string($conexion, trim(strip_tags($_REQUEST['nombre'])));
$apellido1 = mysqli_real_escape_string($conexion, trim(strip_tags($_REQUEST['apellido1'])));
$apellido2 = mysqli_real_escape_string($conexion, trim(strip_tags($_REQUEST['apellido2'])));
$email = mysqli_real_escape_string($conexion, trim(strip_tags($_REQUEST['email'])));
$clave = $_REQUEST['clave'];

//clave cifrada

$hashedPassword=password_hash($clave,PASSWORD_DEFAULT);

$tipo_usuario = 'usuario';

$sql="INSERT INTO usuario (nombres,apellido1,apellido2,email,clave,tipo_usuario) VALUES
('$nombre', '$apellido1', '$apellido2','$email','$hashedPassword','$tipo_usuario' )" ;


if (mysqli_query($conexion,$sql) ) {

    echo "Usuario añadido correctamente";
   
}else{

echo "Error: " .$sql ."<br>" . mysqli_error($conexion);

}


//cerramos conexion como siempre
mysqli_close($conexion);




?>
<a href="index.html">Volver al menú</a>