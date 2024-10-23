<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acumulador</title>
</head>
<body>

<?php  

//variable acumulador

$total =0;

for ($i=0; $i <5 ; $i++) { 

    $dado = rand(1,6);
    print "<img src='./img/$dado.jpg' width=100 height=100>\n";
    $total =$total + $dado;
}


print "<h1>Ha obtenido un total de puntos de : $total </h1>"

?>
    
</body>
</html>