<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 </title>
</head>
<body>
    <!--Muestra los números múltiplos de 5 de un bucle de 0 a 100 utilizando while. -->

<?php 

$numeros = 0;

echo "Los multiplos de 5 entre 0 y 100 son : <br><br> ";

while ($numeros <= 100) {
    
    if ($numeros % 5 == 0) {
        
        echo $numeros ."<br><br>";
    }

   $numeros++;
}



?>
    
</body>
</html>