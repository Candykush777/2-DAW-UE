<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While 2</title>
</head>
<body>

<?php 

$numero =5 ; // ejemplo para factorial número 5 
$factorial =1;

while($numero >1){

    $factorial = $numero * $factorial;
    $numero = $numero -1;
}

echo "el factorial de 5 es : " .$factorial ; // habia un fallo dle profesor ya que salia 1 sino 

?>
    
</body>
</html>