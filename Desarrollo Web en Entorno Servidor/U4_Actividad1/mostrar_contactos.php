<?php 

$nombreFichero="agenda.txt"; //el fichero siempre tiene que estar en la misma carpeta sino no lo ecuentra 

if (file_exists($nombreFichero)) {

    $archivo = fopen($nombreFichero,"r"); // r de read, porque solo queremos mostrarlos



    echo "<h1>Lista de contactos</h1><ul>";

    while (($linea=fgets($archivo)) !==false) {

        $datos=explode("|", trim($linea));

        echo "<li>Nombre: $datos[0], 
        Primer Apellido: $datos[1], 
        Segundo Apellido: $datos[2], 
        Teléfono: $datos[3],
         Email: $datos[4]</li>";

          
}echo "</ul>";
fclose($archivo);





}else{

    echo "<h1>No hay contactos guardados aún.</h1>";
}
echo '<a href="index.php">Volver al Menú Principal</a>';

?>