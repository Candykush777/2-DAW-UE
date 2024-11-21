<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego dados</title>
    <style>
        body {
            background-color: green;
            display: flex;
            flex-direction: column;
            /* aseguramos  verticalmente los elementos*/
            text-align: center;

        }

        h1 {
            margin-top: 20px;
            font-weight: bold;
        }

        .container {
            background-color: khaki;
            padding: 20px;
            margin-top: 20px;
            border: solid green 5px;
            width: 80%;
            max-width: 650px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 40px;
            border-radius: 10px;

        }

        .sub-container {

            border-radius: 30px;
            border: solid black 5px;
            margin-left: 5px;
            margin-right: 5px;
            margin-bottom: 5px;
            margin-top: 5px;
            padding: 40px;



        }

        .sub-container1 {

            border-radius: 30px;
            border: solid black 5px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 5px;
            margin-top: 5px;
            padding: 30px;
            background-image: url('dados_oro.avif');
            background-repeat: repeat;
            background-size: 100px 100px;
            width: 80%;


        }

        .sub-container2 {

            border-radius: 30px;
            border: solid black 5px;
            margin-left: 5px;
            margin-right: 5px;
            margin-bottom: 5px;
            margin-top: 5px;
            padding: 40px;
            background-color: rgb(30, 80, 23);
            

        }

        .sub-container3 {

            border-radius: 30px;
            border: solid black 5px;
            margin-left: 5px;
            margin-right: 5px;
            margin-bottom: 5px;
            margin-top: 5px;
            padding: 40px;
            background-color: rgb(23, 95, 30);
            



        }

        .container h3 {
            font-size: 1.5em;
            margin-bottom: 20px;
        }


        img {
            width: 50px;
            height: 50px;
            margin: 5px;

        }
    </style>
</head>

<body>

    <h1><b>Juego de Dados para dos Jugadores</b></h1>
    <div class="sub-container3">
        <div class="sub-container2">
            <div class="sub-container1">
                <div class="container">
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
                        $estaRondaJugador1 = array_sum($tiradaJugador1); // Aquí sumamos el total de cada ronda
                        print "<br><br>La suma total de la  ronda es : $estaRondaJugador1 <br><br>";
                        echo "<strong>Jugador 2:</strong><br><br>";
                        for ($i = 0; $i < 5; $i++) {
                            $dado = rand(1, 6);
                            print "<img  src='./img/$dado.jpg' width=100 height=100>";
                            $tiradaJugador2[] = $dado;
                        }
                        $estaRondaJugador2 = array_sum($tiradaJugador2);
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
                    } else if ($sumJugador2 > $sumJugador1) {
                        echo "<b>¡¡El ganador es el Jugador 2 con $sumJugador2 Rondas ganadas !!</b><br><br><br><br>";
                    } else {

                        echo "<b>El juego ha terminado en empate</b><br><br><br><br>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>