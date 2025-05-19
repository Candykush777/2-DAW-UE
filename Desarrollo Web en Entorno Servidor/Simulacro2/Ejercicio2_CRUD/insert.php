<?php 

$conexion=mysqli_connect('localhost','root','','examensim');

if(!$conexion){

    die("conexión fallida: " .mysqli_connect_error());
}


$nombre=mysqli_real_escape_string($conexion, $_REQUEST['nombre']);
$email=mysqli_real_escape_string($conexion, $_REQUEST['email']);
$edad=mysqli_real_escape_string($conexion, $_REQUEST['edad']);


$sql="INSERT INTO usuarios (nombre,email,edad) VALUES ('$nombre','$email','$edad')";

if(mysqli_query($conexion,$sql)){

    echo "Usuario añadido Exitosamente";
}else{

    echo "Error: " .$sql ."<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);

?>
<a href="index.html">Volver al menú</a>