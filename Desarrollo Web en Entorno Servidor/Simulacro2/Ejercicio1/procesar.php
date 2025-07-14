<?php 


$nombre=trim(strip_tags($_REQUEST['nombre']));
$nota=trim(strip_tags($_REQUEST['nota']));


$nombreFichero="agenda.txt";

$archivo=fopen($nombreFichero,"a");

if($archivo){

$alumno=$nombre .":" . $nota .PHP_EOL;

fwrite($archivo,$alumno);
fclose($archivo);


echo "Alumno guardado con exito";



}else{
    echo "Error al ñadir el alumno";
}


/* dddddd
ddddd */
?>