<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Función</title>
</head>

<body>

    <!-- Hacer un programa php que tenga una función que reciba con 3 números y devuelva el mayor de ellos. -->

    <div class="container">

        <h2>Resultados</h2>

        <?php

        if (isset($_REQUEST['calcular'])) {



            $a = $_REQUEST['numero1'];
            $b = $_REQUEST['numero2'];
            $c = $_REQUEST['numero3'];
           /*  $operar = $_REQUEST['mayorNumero']; */ //esto no me sirve para nada en realidad 


            function mayorNumero($x, $y, $z)
            {

                if ($x == $y && $y == $z) {

                    print "Los tres numeros son iguales: $x, $y, $z ";
                } elseif ($x == $y && $x > $z) {

                    print "Los numeros mayores son : $x y $y";
                } elseif ($y == $z && $y > $x) {

                    print "Los numero mayores son : $z y $y";
                } elseif ($x > $y && $x > $z) {

                    print "El mayor numero es $x";
                } elseif ($y > $x && $y > $z) {

                    print " El mayor numero es $y";
                } else {

                    print "el mayor numero es  $z";
                }
            }

            mayorNumero($a, $b, $c);
        } else {

            print "Por favor introduce tres números y haz click en calcular. ";
        }
            /* $a=5;
$b=5;
$c=2;
$d=mayorNumero($a,$b,$c);
print $d  */;
        ?>
    </div>
</body>

</html>