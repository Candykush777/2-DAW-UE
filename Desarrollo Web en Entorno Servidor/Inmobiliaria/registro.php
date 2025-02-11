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

// Verificar si el correo ya existe
$check_sql = "SELECT correo FROM usuario WHERE correo = '$email'";
$check_result = mysqli_query($conexion, $check_sql);

if (mysqli_num_rows($check_result) > 0) {
    echo "<script>alert('Este correo ya está registrado. Intenta con otro.'); window.location.href='registro.php';</script>";
    exit();
}

$sql="INSERT INTO usuario (nombres,apellido1,apellido2,correo,clave,tipo_usuario) VALUES
('$nombre', '$apellido1', '$apellido2','$email','$hashedPassword','$tipo_usuario' )" ;

if (mysqli_query($conexion,$sql) ) {

    echo "<script>alert('Registro exitoso. Ahora puedes iniciar sesión.'); window.location.href='login.html';</script>";

    
exit();
   
}else{

echo "Error: " .$sql ."<br>" . mysqli_error($conexion);
}

//cerramos conexion como siempre
mysqli_close($conexion);

?>
<a href="index.html">Volver al menú</a>