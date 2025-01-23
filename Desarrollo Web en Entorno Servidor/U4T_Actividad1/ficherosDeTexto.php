<?php



$nombre=trim(strip_tags($_REQUEST['nombre']));
$apellido1=trim(strip_tags($_REQUEST['apellido1']));
$apellido2=trim(strip_tags($_REQUEST['apellido2']));
$telefono=trim(strip_tags($_REQUEST['telefono']));
$email=trim(strip_tags($_REQUEST['email']));

$nombreFichero = "agenda.txt";
$archivo= fopen($nombreFichero,"w");


if($archivo){

$datos=array(

    $nombre,
    $apellido1,
    $apellido2,
    $telefono,
    $email,

);

foreach($datos as $dato) { 


    fwrite($archivo,$dato . PHP_EOL);//end of line , lo lee hasta el final
}


fclose($archivo);
echo "fichero creado con éxito...";

}else{
    echo "Error al crear el archivo";

}

?>