<?php 


$conexion=mysqli_connect('localhost','root','','examensim');

if (!$conexion) {


   die("Error de Conexión" . mysqli_connect_error());
}


$id= mysqli_real_escape_string($conexion, trim(strip_tags($_REQUEST['id'])));

$sql ="DELETE FROM usuarios WHERE id=$id";

mysqli_query($conexion, $sql);

if (mysqli_affected_rows($conexion)>0) {

    echo '<div class="alert alert-success", role="alert">Usuario Borrado Exitosamente</div>';
    
}

else{

    echo '<div class="alert alert-danger" role="alert">No coinciden usuarioscon el id</div>';
}

mysqli_close($conexion);


?> 




<a href="index.html">Volver al menú</a>
