<?php 


include 'conexion.php';


$codigo_Piso=mysqli_real_escape_string($conexion,trim(strip_tags($_REQUEST['codigo'])));

$sql ="DELETE  from  pisos  where Codigo_piso=$codigo_Piso";

mysqli_query($conexion,$sql);

if (mysqli_affected_rows($conexion) > 0) {
    
    echo '<div class="alert alert-success", role="alert">Inmueble Borrado Exitosamente</div>';
}

else{

    echo '<div class="alert alert-danger" role="alert">No coincide con el codigo del Inmueble</div>';
}


mysqli_close($conexion);

?>