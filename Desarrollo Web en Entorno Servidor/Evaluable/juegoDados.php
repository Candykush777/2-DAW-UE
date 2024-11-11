<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego dados</title>
</head>

<body>

    <h1 style="text-align: center;"><b>Juego de Dados para dos Jugadores</b></h1>

    <h3>¡¡ El juego tiene 5 Rondas para cada jugador !!</h3><br>

    <?php



    $sumJugador1 = 0;
    $sumJugador2 = 0;
    $rondaWinJugador1 = 0;
    $rondaWinJugador2 = 0;


    for ($ronda = 1; $ronda <= 5; $ronda++) {

        echo "\n<b> Ronda : $ronda </b>\n";

        $tiradaJugador1 = array();
        $tiradaJugador2 = array();


        echo "<br><br><strong>Jugador 1:</strong><br><br>";
        for ($i = 0; $i < 5; $i++) {

            $dado = rand(1, 6);

            print "<img src='./img/$dado.jpg' width=100 height=100>";


            $tiradaJugador1[] = $dado;
        }

        $estaRondaJugador1 =array_sum($tiradaJugador1); // Aquí sumamos el total de cada ronda

        print "<br><br>La suma total de la  ronda es : $estaRondaJugador1 <br><br>";

        echo "<strong>Jugador 2:</strong><br><br>";

        for ($i = 0; $i < 5; $i++) {

            $dado = rand(1, 6);

            print "<img  src='./img/$dado.jpg' width=100 height=100>";

            $tiradaJugador2[]=$dado;
        }

        $estaRondaJugador2=array_sum($tiradaJugador2);
        print "<br><br>La suma total de la  ronda es : $estaRondaJugador2<br><br>";
        
        //Ganadores de cada Ronda

        if ($estaRondaJugador1 > $estaRondaJugador2) {

            echo "EL ganador de la tirada es Jugador 1 \n<br><br>";

            $sumJugador1 += 1;
            /* $rondaWinJugador1 += 1; ignorar */
        } else if ($estaRondaJugador2 > $estaRondaJugador1) {
            echo "El ganador de la tirada es el Jugador 2 <br><br>";

            $sumJugador2 += 1;
            /* $rondaWinJugador2 += 1; ignorar*/
        } else {
            echo "Esta ronda ha sido Empate <br><br>";
        }
    }

    //Ganador Final

    if ($sumJugador1 > $sumJugador2) {

        echo "<b>El ganador es el Jugador 1 con $sumJugador1 Rondas ganadas</b><br><br><br><br>";
    } else if($sumJugador2 > $sumJugador1){
        echo "<b>¡¡El ganador es el Jugador 2 con $sumJugador2 Rondas ganadas !!</b><br><br><br><br>";
    }else{

        echo"<b>El juego ha terminado en empate</b><br><br><br><br>";
    }
    ?>

</body>

</html>