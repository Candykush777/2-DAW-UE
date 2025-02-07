<?php 


session_start();

include 'conexion.php';


$email=mysqli_real_escape_string($conexion,trim(strip_tags($_REQUEST['email'])));
$clave=$_REQUEST['clave'];

//vamos a verificar las credenciales 

$sql = "SELECT usuario_id, nombres, tipo_usuario, clave FROM usuario WHERE correo = '$email'";

$result =mysqli_query($conexion, $sql);
$usuario= mysqli_fetch_assoc($result);

if ($usuario && password_verify($clave,$usuario['clave'])) {

$_SESSION['usuario_id']=$usuario['usuario_id'];
$_SESSION['nombre']=$usuario['nombres'];
$_SESSION['tipo_usuario']=$usuario['tipo_usuario'];


}else{

    echo "Credenciales incorrectas. Intentalo de nuevo.";
}

//cerrar conexion

mysqli_close($conexion);



?>