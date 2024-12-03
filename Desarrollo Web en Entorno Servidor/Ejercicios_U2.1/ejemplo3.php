<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <?php 
$fecha = date ("j/n/Y H:i");
print ("$fecha<br>");


 ?>
 <?php
 $fecha = date ("j/n/Y", strtotime("5 april 2023"));
print ("$fecha");

 ?>
    
</body>
</html>