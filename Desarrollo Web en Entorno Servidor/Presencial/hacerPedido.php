<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacer pedido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./Utils/css/style.css">
</head>
<body>
<h1 class="text-center mt-4 mb-4" >Pedido</h1>

<div class="container" id="formulario2">

<form action="hacerPedido.php" method="post">

<label for="nombre" class="form-label">Nombre:</label><br>
<input type="text" class="form-control w-70" name="nombre" placeholder="Introduce tu nombre" required><br>
<label for="direccion" class="form-label">Dirección:</label><br>
<input type="text" class="form-control w-70" name="direccion" placeholder="Introduce tu dirección" required><br>
<label for="iphone11" class="form-label">Iphone11:</label>
<input type="radio" name="iphone11" ><br>
<label for="cantidadIphone" class="form-label">Cantidad:</label>
<input type="number" class="form-control w-25" name="cantidadIphone11">
<label for="roomba" class="form-label">Roomba:</label>
<input type="radio" name="roomba" ><br>
<label for="cantidadRoomba" class="form-label">Cantidad:</label>
<input type="number" class="form-control w-25" name="cantidadRoomba">
<label for="reloj" class="form-label">Reloj:</label>
<input type="radio" name="reloj" ><br>
<label for="cantidadReloj" class="form-label">Cantidad:</label>
<input type="number" class="form-control w-25" name="cantidadReloj">

<div class="botonContainer">
<button type="submit" class="btn btn-info btn-lg " id="boton" name="submit">Aceptar</button>
</div>

</form>
</div>

<?php 
$nombreFichero="pedidos.txt";
$archivo=fopen($nombreFichero,"a");

if (isset($_REQUEST['submit'])) {
        $nombre =trim(strip_tags($_REQUEST['nombre']));
    $direccion =trim(strip_tags($_REQUEST['direccion']));

  if (isset($_REQUEST['iphone11'])) {
    $iphone = trim(strip_tags($_REQUEST['iphone11']));
    $cantidadIphone = trim(strip_tags($_REQUEST['cantidadIphone11']));
} else {
    $iphone = null;
    $cantidadIphone = null;
}

if (isset($_REQUEST['roomba'])) {
    $roomba = trim(strip_tags($_REQUEST['roomba']));
    $cantidadRoomba = trim(strip_tags($_REQUEST['cantidadRoomba']));
} else {
    $roomba = null;
    $cantidadRoomba = null;
}

if (isset($_REQUEST['reloj'])) {
    $reloj = trim(strip_tags($_REQUEST['reloj']));
    $cantidadReloj = trim(strip_tags($_REQUEST['cantidadReloj']));
} else {
    $reloj = null;
    $cantidadReloj = null;
}

if ($iphone || $roomba || $reloj) {

    $pedido= "$nombre" ."|" . $direccion . "|" . 
          "iPhone: " . $iphone . "|" . $cantidadIphone . "|" .
          "Roomba: " . $roomba . "|" . $cantidadRoomba . "|" .
          "Reloj: " . $reloj . "|" . $cantidadReloj . 
          PHP_EOL;

    if ($archivo) {
            
        fwrite($archivo,$pedido);
        fclose($archivo);
        echo "Pedido Guardado con Éxito";
            
        }else{
            echo "Error al crear el pedido";
        }
   
}else{

    echo "Por favor, selecciona al menos un producto.";
}
     
}
?>
    </body>
</html>