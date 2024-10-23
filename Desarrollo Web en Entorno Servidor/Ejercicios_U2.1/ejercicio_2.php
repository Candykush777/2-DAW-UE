<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 2 </title>
</head>
<body>

<!--Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle for. -->

<?php 



echo "Mostrando los números del 160 al 320, de 20 en 20 <br><br>";

for ($i=160; $i <=320 ; $i += 20) {  //no podria ser +20 xq creamos un bucle infinitoq ue sale 160 

echo "<p>$i</p>\n";
    
}

//echo $i ,"<br><br>"; esto sale 340 poruq eincrementa en 20 al estar fuera dle bucle


?>
    
</body>
</html>