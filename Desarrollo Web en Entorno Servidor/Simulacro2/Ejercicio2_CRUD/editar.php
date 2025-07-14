<?php
$conexion = mysqli_connect('localhost','root','','examensim');
if (!$conexion) {
    die("Error de Conexión: " . mysqli_connect_error());
}

// Si se envía el formulario de actualización
if (isset($_POST['update'])) {
    $id     = mysqli_real_escape_string($conexion, trim($_POST['id']));
    $nombre = mysqli_real_escape_string($conexion, trim($_POST['nombre']));
    $email  = mysqli_real_escape_string($conexion, trim($_POST['email']));
    $edad   = mysqli_real_escape_string($conexion, trim($_POST['edad']));
    
    $sql = "UPDATE usuarios 
            SET nombre='$nombre', email='$email', edad='$edad' 
            WHERE id=$id";
    
    if (mysqli_query($conexion, $sql)) {
        echo '<div class="alert alert-success" role="alert">
                Usuario actualizado correctamente.
              </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Error al actualizar: ' . mysqli_error($conexion) . '
              </div>';
    }
}

// Si llega vía GET un id, cargamos los datos para el formulario
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conexion, trim($_GET['id']));
    $sql = "SELECT * FROM usuarios WHERE id=$id";
    $res = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($res) == 1) {
        $row = mysqli_fetch_assoc($res);
        $nombre = $row['nombre'];
        $email  = $row['email'];
        $edad   = $row['edad'];
    } else {
        echo '<div class="alert alert-warning" role="alert">
                No se encontró usuario con ID ' . htmlspecialchars($id) . '.
              </div>';
        // Reseteamos para que muestre el form de buscar ID
        unset($id);
    }
}
?>

<a href="index.html">Volver al menú</a>