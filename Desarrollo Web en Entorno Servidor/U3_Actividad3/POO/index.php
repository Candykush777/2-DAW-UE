<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_POO</title>
</head>
<body>
    <?php 
    include_once 'vehiculo.php';
include_once 'bicicleta.php';
include_once 'coche.php';


//Crear bicicleta con 24 marchas

$miBici = new Bicicleta("Mountain Bike",36);

$miCoche=new Coche("Coche deportivo",3000);

$miBici->recorre(50);
$miCoche->recorre(500);

echo $miBici->hazCaballito()."<br>";
echo $miCoche->quemaRueda()."<br>";

echo "Mi bici ha recorrido ".$miBici->getKmRecorridos()." Km<br>";
echo "Mi coche ha recorrido ".$miCoche->getKmRecorridos()." Km<br>";

echo "Se han creado un total de ".Vehiculo::getVehiculosCreados()." vehículos.<br>";
echo "Todos los vehículos han hecho un total de ".Vehiculo::getKmTotales()." Km.<br>";


    
    
    ?>
    
</body>
</html>