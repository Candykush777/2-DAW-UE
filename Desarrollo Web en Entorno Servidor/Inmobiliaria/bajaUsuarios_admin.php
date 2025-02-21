<?php 


include 'conexion.php';


$id=mysqli_real_escape_string($conexion,trim(strip_tags($_REQUEST['id'])));

$sql ="DELETE  FROM  usuario  WHERE usuario_id=$id";

mysqli_query($conexion,$sql);

if (mysqli_affected_rows($conexion) > 0) {
    
    echo '<div class="alert alert-success", role="alert">Usuario Borrado Exitosamente</div>';
}

else{

    echo '<div class="alert alert-danger" role="alert">No coincide con el id</div>';
}


mysqli_close($conexion);

?>