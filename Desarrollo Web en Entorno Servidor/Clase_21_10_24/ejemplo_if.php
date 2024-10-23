<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If</title>
</head>
<body>

<?php 

//&& and || OR ! NOT

$diaMes =rand(1,31);

echo $diaMes."<br>";

if($diaMes < 7){

    echo "Estamos a primeros de mes ";
}
else if($diaMes >= 7 && $diaMes <=23){

    echo "Estamos a mediados de mes ";
}

else if($diaMes == 24 || $diaMes == 25){

    echo "Mejores dias del mes juntos";

}
else {

    echo "Es final de mes ";
}

?>
    
</body>
</html>