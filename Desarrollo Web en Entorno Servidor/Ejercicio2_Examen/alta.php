<?php 

$conexion=mysqli_connect('localhost','root','','examen2');

if(!$conexion){

    die("conexión fallida: " .mysqli_connect_error());
}

$fecha=mysqli_real_escape_string($conexion,$_REQUEST['date']);
$nombre=mysqli_real_escape_string($conexion, $_REQUEST['nombre']);
$vendido=mysqli_real_escape_string($conexion, $_REQUEST['vendido']);
$precio=mysqli_real_escape_string($conexion, $_REQUEST['precio']);


$sql="INSERT INTO ordenador (fecha,nombre,vendido,precio) VALUES ('$fecha','$nombre','$vendido','$precio')";

if(mysqli_query($conexion,$sql)){

    echo "Ordenador añadido Exitosamente";
}else{

    echo "Error: " .$sql ."<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);

?>
<a href="index.html">Volver al menú</a>