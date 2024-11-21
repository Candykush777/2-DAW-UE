<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
    <style>
        .centro {
            text-align: center;
        }

        #boton {
            background-color: beige;
            padding: 4px;
            width: 100px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            border: none;

        }
    </style>
</head>

<body>
    <form action="datos_operaciones.php" method="post">
        <table>
            <tr><br><br>
                <td>
                    <label for="primero">Introduzca el primer número : </label>
                    <input type="number" name="numero1" style="width: 70px;">
                </td>

                <td class="centro"><label for="operacion">Selecione la operación:</label></td>
            </tr>
            <tr>
                <td>
                    <label for="segundo">Introduzca el segundo número:</label>
                    <input type="number" name="numero2" style="width: 70px;">
                </td>
                <td><input type="radio" id="Suma" name="Suma" value="suma">Suma
                    <input type="radio" id="Suma" name="Suma" value="suma">Resta
                    <input type="radio" id="Suma" name="Suma" value="suma">Producto
                    <input type="radio" id="Suma" name="Suma" value="suma" checked>Cociente


                </td>



            </tr>

    </form>
    </table>
    <br><br><input type="submit" id="boton" value="Enviar datos" datos">
</body>

</html>