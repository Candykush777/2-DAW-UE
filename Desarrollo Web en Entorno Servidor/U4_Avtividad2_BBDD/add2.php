<?php 


$conexion=mysqli_connect('localhost','root','','concesionario');


if(!$conexion){

    die("conexión fallida: " .mysqli_connect_error());
}


$marca=mysqli_real_escape_string($conexion, $_REQUEST['marca']);
$modelo=mysqli_real_escape_string($conexion, $_REQUEST['modelo']);
$anio=mysqli_real_escape_string($conexion, $_REQUEST['año']);

$sql="INSERT INTO coches (marca,modelo,año) VALUES ('$marca','$modelo','$anio')";


if(mysqli_query($conexion,$sql)){

    echo "Producto añadido Exitosamente";
}else{

    echo "Error: " .$sql ."<br>" . mysqli_error($conexion);
}


mysqli_close($conexion);

?>
<a href="add1.php">Volver al menú</a>