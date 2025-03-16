<?php 


include 'conexion.php';

// Sanitize and validate the input ID
if (!isset($_REQUEST['id']) || !is_numeric($_REQUEST['id'])) {
    die('Invalid ID provided');
}

$id = (int)$_REQUEST['id'];

// Prepare and execute the delete query using prepared statements
$sql = "DELETE FROM usuario WHERE usuario_id = ?";
$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

if (mysqli_affected_rows($conexion) > 0) {
    
    echo '<div class="alert alert-success", role="alert">Usuario Borrado Exitosamente</div>';
}

else{

    echo '<div class="alert alert-danger" role="alert">No coincide con el id</div>';
}


mysqli_close($conexion);

?>