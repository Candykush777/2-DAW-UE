<?php 

$nombreFichero= "agenda2.txt";


if(file_exists($nombreFichero)){

$archivo = fopen($nombreFichero, "r");


echo "<h1>Lista de Contactos<h1><ul>";


while (($linea=fgets($archivo)) !==false){

$datos=explode("|", trim($linea));


echo "<li>
Nombre: $datos[0],
Primer Apellido:$datos[1],
Segundo Apellido:$datos[2],
Teléfono:$datos[3],
Email:$datos[4],


   </li>";

   

}echo "</ul>";

fclose($archivo);

}else{

    echo"<h1>No hay contactos guardados aún.</h1>";


}

?>