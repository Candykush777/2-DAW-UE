<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Precio Pedido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./Utils/css/style.css">
</head>
<body>

<h1 class="text-center mb-4 mt-4">Calcular Precio Pedido</h1>


<div class="container" id="formulario2">
<form action="calcular.php" method="post">
<label for="nombre" class="form-label fs-3"><b>Nombre:</b></label>
<input type="text" class="form-control " name="nombre" placeholder="Introduce tu nombre" required>



<div class="botonContainer">
<button type="submit" class="btn btn-info btn-lg " id="boton" name="submit">Buscar</button>
</div>


</form>
</div>

<?php 



if (isset($_REQUEST['submit'])) {

    $nombre=trim(strip_tags($_REQUEST['nombre']));
            
$archivo="pedidos.txt";

if (file_exists($archivo)) {

$archivoAbierto=fopen($archivo,"r");
$encontrado=false;

while (($linea=fgets($archivoAbierto)) !== false) {

    $arrayDatos=explode("|",$linea);


        if (trim($arrayDatos[0]) == $nombre) {

            $encontrado=true;

           /*  tenemos que hacer un arreglo, ya que hay que convertirlos a numero, 
            y verificar si estan vacios y asignarles el valor numerico 0
            voy a usar el operador ternario para que no quede un codigo spaguetti
            is_numeric hace una validación extra pero en este caso se podria ahorrar */

            $cantidadIphone=isset($arrayDatos[3]) /* && is_numeric($arrayDatos[3]) */ ? intval($arrayDatos[3]) : 0;
            $cantidadRoomba=isset($arrayDatos[5]) /* && is_numeric($arrayDatos[5]) */ ? intval($arrayDatos[5]) : 0;
            $cantidadReloj=isset($arrayDatos[7]) /* && is_numeric($arrayDatos[7]) */ ? intval($arrayDatos[7]) : 0;




                  
$totalIphone =($cantidadIphone*1000);
$totalRoomba =($cantidadRoomba*500);
$totalReloj=($cantidadReloj *100);

echo "<ul><li>
El pedido total de <b>$nombre<b/> es :</li>
<li> Iphone11: $totalIphone €</li>
<li>Roomba: $totalRoomba €</li>
<li>Reloj:  $totalReloj € </li></ul>";

        }
}
if (!$encontrado) {

    echo "<p class='text-danger'><b>Error:</b> No se encuentra el nombre en los pedidos.</p>";
}


fclose($archivoAbierto);

} else{
    echo "No se ha encontrado el Pedido";
} 

}
?>
   
</body>
</html>