<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego dados</title>
</head>

<body>

    <h1 style="text-align: center;"><b>Juego de Dados para dos Jugadores</b></h1>

    <h3>¡¡ El juego tiene 5 Rondas para cada jugador !!</h3>

    <?php

    

    $sumJugador1 = 0;
    $sumJugador2 = 0;
    $rondaWinJugador1 = 0;
    $rondaWinJugador2 = 0;
    $tiradaJugador1 = array();
    $tiradaJugador2 = array();

    for ($ronda=1; $ronda <=5 ; $ronda++) { 
        
        echo"$ronda";
    



    for ($i = 0; $i < 5; $i++) {

        $dado = rand(1, 6);

        print "<img src='./img/$dado.jpg' width=100 height=100>";

        $sumJugador1 +=$dado;

        
    }print "<br><br>La suma total de la 1a ronda es : $sumJugador1";


    }
    ?>

</body>

</html>