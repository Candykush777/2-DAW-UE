<?php
 
$nombre=trim(strip_tags($_REQUEST['nombre']));
$apellido1=trim(strip_tags($_REQUEST['apellido1']));
$apellido2=trim(strip_tags($_REQUEST['apellido2']));
$telefono=trim(strip_tags($_REQUEST['telefono']));
$email=trim(strip_tags($_REQUEST['email']));


$nombreFichero= "agenda2.txt";
$archivo=fopen($nombreFichero,"a");

if($archivo){

//Hay que guardarlo como una linea 

$contacto= $nombre ."|" . $apellido1 ."|" . $apellido2 ."|" . $telefono ."|" . $email ."|"  .PHP_EOL; //así reconoce el final 

fwrite($archivo,$contacto);
fclose($archivo);

echo "contacto guardado con éxito";

} else{

echo "Error al abir el archivo ";

}


?>