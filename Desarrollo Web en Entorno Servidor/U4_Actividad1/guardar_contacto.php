<?php 

$nombre=trim(strip_tags($_REQUEST['nombre']));
$apellido1=trim(strip_tags($_REQUEST['apellido1']));
$apellido2=trim(strip_tags($_REQUEST['apellido2']));
$telefono=trim(strip_tags($_REQUEST['telefono']));
$email=trim(strip_tags($_REQUEST['email']));

$nombreFichero = "agenda.txt";
$archivo= fopen($nombreFichero,"a"); // a para que se vayan guardando y no se sobreescriba cómo con w

if ($archivo) {

//esto se guarda como una linea
    $contacto= $nombre ."|" . $apellido1 ."|" . $apellido2 ."|" . $telefono ."|" . $email . PHP_EOL;//reconoce el final


fwrite($archivo,$contacto);
fclose($archivo);
echo "Contacto guardado con éxito ¡¡¡¡";


}else{
echo "error al abrir el archivo";


}
?>