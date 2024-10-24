<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>

<!--Realiza un programa que nos diga cuántos dígitos tiene un número aleatorio entre (0 y 9999). Mostrar el número y la cantidad de dígitos.-->

<?php 

$num = rand(0,9999);

echo "<h2>El número aleatorio generado es : $num </h2>";


//Vamos a contar los digitos, se me ocurrió meterlo en un array y luego contarlso ahí dentro, 
//pero tuve que mirar la sintaxis, y buscando encontré otra manera mas sencilla con string y strlen
$digitos =(string)$num; // lo convertimos en una cadena 

 // strlen($digitos); me falta almacenar el valor que devuelve

 $cantidadDigitos = strlen($digitos);

echo "<h2>Los digitos del  generado son : $cantidadDigitos</h2>\n";


echo "<h1>El numero generado es $num y tiene : $cantidadDigitos digitos ¡¡¡¡</h1>"


?>

    
</body>
</html>