<?php 


$dni=trim(strip_tags($_REQUEST['dni']));
$titulo=trim(strip_tags($_REQUEST['titulo']));
$fecha=trim(strip_tags($_REQUEST['date']));


$nombreFichero="prestamos.txt";

$archivo=fopen($nombreFichero,"a");

if($archivo){

$usuario=$dni .":" . $titulo .":" . $fecha   .PHP_EOL;

fwrite($archivo,$usuario);
fclose($archivo);


echo "Libro guardado con exito";



}else{
    echo "Error al añadir el Libro";
}

?>