<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

// concepto de contador : 
$cont =0; // Se inicia el contador cómo en java

for ($i=0; $i < 9; $i++) { 
    
    $dado = rand(1,6);

    print "<img src='./img/$dado.jpg' width=100 height=100>\n";


if ($dado ==3 ){

    $cont++; // cont=cont+1
}

}

print "<h1>Han salido : $cont  veces tres</h1>\n";

?>
    
</body>
</html>