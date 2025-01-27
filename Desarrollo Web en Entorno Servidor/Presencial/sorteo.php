<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./Utils/css/style.css">

</head>
<body>

<div>
<h1 class="text-center mb-4 mt-4">Sorteo de Pedido</h1>
<form action="sorteo.php" method="post"> 


<button type="submit" class="btn btn-primary btn-lg " name="submit">Realizar Sorteo</button><br><br>
        </form>


</form>
</div>
<?php 

if (isset($_REQUEST['submit'])) {
    


$archivo="pedidos.txt";

if (file_exists($archivo)) {


    $archivoAbierto=fopen($archivo,"r");
    $pedidos=[];

while (($linea =fgets($archivoAbierto)) !== false) {


$pedidos[]=$linea;

}


$totalPedidos=count($pedidos);

if ($totalPedidos > 0) {

$numeroAleatorio=rand(1,$totalPedidos);


$lineaGanadora=$pedidos[$numeroAleatorio -1];


$arrayDatos=explode("|",$lineaGanadora);

echo "<h2>El Ganador del sorteo es : <b> $arrayDatos[0] </b></h2>";
    
}else{

    echo "<p>No hay pedidos para sortear</p>";
}
fclose($archivoAbierto);

}else{
    echo "<p>el archivo de pedidos no Existe</p>";
}}

?>

    
</body>
</html>