<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 </title>
</head>

<body>

    <!--Un programa que genere 2 tiradas de 3 dados(simulando 2 jugadores). 
Muestre las dos tiradas y me diga cual tiene mayor puntuación(sumando las tiradas)-->

    <?php

    echo "<h1> ¡¡ Juego de Dados !! </h1>";
    
    echo "<h2> Tirada jugador 1 </h2><br>";

    $sumJugador1 =0;

    for ($i = 1; $i <= 3; $i++) {

        $dado = rand(1, 6);
       

        print "<img src='./img/$dado.jpg' width=100 height=100><br><br>";

        $sumJugador1 += $dado; //acumulador
    }

    echo "<h2> Tirada jugador 2 </h2><br>";
    $sumJugador2 = 0;

    for ($i = 1; $i <= 3; $i++) {

        $dado = rand(1, 6);
        
        print "<img src='./img/$dado.jpg' width=100 height=100><br><br>";

        $sumJugador2 += $dado;
    }

    if ($sumJugador1 > $sumJugador2) {

        echo "<h3>Jugador 1 tiene mayor puntuacion total : $sumJugador1 y la tirada de Jugador 2 fue : $sumJugador2</h3>";
    } else if($sumJugador2 > $sumJugador2){

        echo "<h3>Jugador 2 tiene mayor puntuación total : $sumJugador2 y la tirada de Jugador 1 fue : $sumJugador1</h3>";
    }
else{

    echo "<h3>Empate, los dos jugadores suman los mismos puntos </h3>";
}




    ?>

</body>

</html>