<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./Utils/css/style.css">
</head>
<body>

<h1 class="text-center mt-4 mb-4">Listado de Pedidos</h1>
<?php 

$archivo="pedidos.txt";

if (file_exists($archivo)) {

    $archivoAbierto=fopen($archivo,"r");

while (($linea=fgets($archivoAbierto)) !== false) {

$arrayDatos=explode("|",$linea);

echo "<ul><li> Nombre: $arrayDatos[0],
Dirección: $arrayDatos[1],
 $arrayDatos[2],
Cantidad: $arrayDatos[3],
 $arrayDatos[4],
Cantidad: $arrayDatos[5],
 $arrayDatos[6],
Cantidad: $arrayDatos[7]

</li>";

    } 

echo "</ul> Los datos se han mostrado correctamente";
fclose($archivoAbierto);

}else{

    echo "El archivo no existe";
}
echo '<a href="index.php">Volver al Menu Principal</a> '
?>
    </body>
</html>