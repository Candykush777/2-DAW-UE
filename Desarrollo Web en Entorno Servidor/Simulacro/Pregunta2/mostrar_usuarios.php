<?php
include 'conexion.php';

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo '<table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Edad</th>
                </tr>
            </thead>
            <tbody>';
    
    while($fila = mysqli_fetch_assoc($resultado)) {
        echo '<tr>
                <td>'.$fila["id"].'</td>
                <td>'.$fila["nombre"].'</td>
                <td>'.$fila["email"].'</td>
                <td>'.$fila["edad"].'</td>
              </tr>';
    }
    
    echo '</tbody></table>';
} else {
    echo '<p class="text-center">No hay usuarios registrados</p>';
}

mysqli_close($conexion);
?> 