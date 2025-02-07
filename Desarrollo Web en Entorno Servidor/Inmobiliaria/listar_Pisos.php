<?php 

include 'conexion.php';

$sql="SELECT  Codigo_piso, calle, numero, piso, puerta, cp, metros, zona, precio, imagen, usuario_id FROM pisos";

$result =mysqli_query($conexion,$sql);

if (mysqli_num_rows($result) >0) {



    while ($row=mysqli_fetch_assoc($result))  {

        echo '<div class="container pintaPiso mt-2 mb-2">';

        echo '<div class="card ">';

        // Mostrar la imagen correctamente usando la etiqueta <img>
        echo '<img class="card-img-top mt-1" src="' . $row['imagen'] . '" alt="Imagen del piso">';

        echo '<div class="card-body ">';

        echo '<div class="card-title mt-2 mb-2"><h5>' . $row['precio'] . '€' . '</h5></div>';

        echo '<div class="card-title mt-2 mb-2"><h5>' . $row['zona'] . '</h5></div>';

       // Agrupar todos los detalles en un solo div
       echo '<div class="card-text dire">';
       echo '<p><b>Calle: </b>' . $row['calle'] . '</p>';
       echo '<p><b>Número: </b>' . $row['numero'] . '</p>';
       echo '<p><b>Piso: </b>' . $row['piso'] . '</p>';
       echo '<p><b>Puerta: </b>' . $row['puerta'] . '</p>';
       echo '<p><b>CP: </b>' . $row['cp'] . '</p>';
       echo '<p><b>Metros: </b>' . $row['metros'] . '</p>';
       echo '<p><b>Usuario id:</b>' . $row['usuario_id'] . '</p>';
       echo '<p><b>Código Piso: </b>' . $row['Codigo_piso'] . '</p>';
       echo '</div>'; // Cerrar card-text

        echo '</div>'; // Cerrar card-body
        echo '</div>'; // Cerrar card
        echo '</div>'; // Cerrar container
    }

echo "</div></div>";

echo '<div class="alert alert-success", role="alert">Los datos se han mostrado correctamente.</div>';
    
}else {

    echo '<div class="alert alert-danger" role="alert">No hay vehiculos en el store</div>';

}














?>