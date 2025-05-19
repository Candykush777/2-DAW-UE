<?php 

$conexion = mysqli_connect('localhost','root','','examensim');

if (!$conexion) {


    die("conexión Fallida" . mysqli_connect_error());
}


$sql = "SELECT id,nombre, email, edad FROM usuarios";
$result=mysqli_query($conexion,$sql);

if (mysqli_num_rows($result) >0) {


    echo '<table class="table table-striped table-bordered">';
    echo '<thead class="table-dark"><tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Edad</th>
                </tr></thead>';
        echo '<tbody>';

        /* mirar esto bien en apuntes */
while($row=mysqli_fetch_assoc($result)){

    echo "<tr>";
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['nombre'] . '</td>';
    echo "<td>" . $row['email']  . "</td>";
    echo "<td>" . $row['edad']  . "</td>";
    echo "</tr>";


}

echo "</tbody></table>";

echo '<div class="alert alert-success", role="alert">Los datos se han mostrado correctamente.</div>';
    
}else {

    echo '<div class="alert alert-danger" role="alert">No hay usuarios en la bbdd</div>';

}

mysqli_close($conexion);
?>






<a href="index.html">Volver al menú</a>



