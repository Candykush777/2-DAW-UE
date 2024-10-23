<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 </title>
    
</head>
<body>

<!--Muestra la tabla de multiplicar de un número generado 
de manera aleatoria entre 1 y 10. El resultado en formato <table> -->

<?php

//echo "Tabla de multiplicar con un número aleatorio entre 0 y 10 : <br><br>";

$numero = rand(1,10);

echo "<h1>Tabla de Multiplicar con $numero : <br><br></h1>";

echo "<table border ='1'>";
echo "<tr><th>Multiplicando</th><th>Resultado</th></tr>"; // Encabezados

//echo "<ol>" esto  es lista ordenada , no table

for ($i=1; $i <=10 ; $i++) { 

$resultado = $numero * $i ;

//echo $numero ." X " .$i ." = ".$resultado ."<br><br>"; esto era sin lista primero

// echo "<li> $numero X $i = $resultado</li>"; esto e slista no tabla 

echo "<tr><td>$numero X $i </td><td>$resultado</td></tr>";
    
}

//echo "</ol>"; cierre de la lista 
echo "</table>";

?>
    
</body>
</html>