<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$hayDos = false; // variable de valores : true o false

for ($i=0; $i <5 ; $i++) { 
    
   $dado = rand(1,6);
   print "<p>tirada de dado : $dado</p>\n";

if($dado == 2){

    $hayDos = true;
}


} // fin del bucle 

if($hayDos == true){

    print "<p>Ha salido algún dos</p>\n";
} else{

    print "<p>No ha salido ningún dos</p>";

}

?>
    
</body>
</html>