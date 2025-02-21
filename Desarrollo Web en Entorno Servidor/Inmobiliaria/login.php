<?php 


session_start();

include 'conexion.php';


$email=mysqli_real_escape_string($conexion,trim(strip_tags($_REQUEST['email'])));
$clave=$_REQUEST['clave'];

//vamos a verificar las credenciales 

$sql = "SELECT usuario_id, nombres, tipo_usuario, correo,  clave FROM usuario WHERE correo = '$email'";

$result =mysqli_query($conexion, $sql);
$usuario= mysqli_fetch_assoc($result);

if ($usuario && password_verify($clave,$usuario['clave'])) {

$_SESSION['usuario_id']=$usuario['usuario_id'];
$_SESSION['nombre']=$usuario['nombres'];
$_SESSION['email'] = $usuario['correo']; 
$_SESSION['tipo_usuario'] = $usuario['tipo_usuario'];
$_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (24	 * 60 * 60) ; // 24 horas

// vamos a verificar que tipo usuario es para redirigir donde sea necesario

if ($_SESSION['tipo_usuario'] == 'administrador') {

    header("Location: menu_Admin.php");
    exit();
    
}else{

    header("Location: menu_Usuarios.php");
    exit();
}




}else{

    echo "<script>alert('Credenciales incorrectas. Inténtalo de nuevo.');window.location.href='login.html';</script>";
}



mysqli_close($conexion);



?>