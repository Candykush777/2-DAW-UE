<?php 

$nombreFichero="agenda.txt";

if(file_exists($nombreFichero)){


$archivo=fopen($nombreFichero, "r");

echo "<h1>Lista de Contactos </h1><ul>";


while (($linea=fgets($archivo)) !==false) {

    $datos=explode(":",trim($linea));

    echo "<li>
    Nombre: $datos[0],
    Nota: $datos[1],
    </li>";
    
}echo "<ul>";

echo ' <a href= index.html>Volver a Inicio </a>';

fclose($archivo);

}else{

    echo"<h1>No hay alumnos guardados aún</h1>";
}




?>