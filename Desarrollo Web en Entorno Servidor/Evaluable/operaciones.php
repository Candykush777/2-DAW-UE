<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Operaciones</title>
    <style>
    body {
        background-color: rgb(173, 216, 230);
        font-family: 'Roboto', sans-serif; 
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; 
        margin: 0;
        
    }

    
    .container {
        background-color: #ffffff; 
        padding: 30px 50px; /* Para darle mas espacio entre todo */
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.8);
        width: 400px; 
        text-align: center; 
        border: solid grey 1px;
        
        
    }

    
    input[type="number"] {
        width: 100%; 
        padding: 10px;
        margin: 10px 0;
        border-radius: 15px;
        border: 1px solid #ccc;
        text-align: center;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
    }

    
    input[type="radio"] {
        margin: 5px 10px;
    }

    
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    
    #boton {
        background-color: cadetblue;
        padding: 10px 20px;
        border: solid black 1px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s;
        width: 70%; 
        
    }

    #boton:hover {
        background-color: #45a049; 
    }
</style>
</head>
<body>

    <div class="container">
        <form action="datos_operaciones.php" method="post">
            <div>
                <label for="primero">Introduzca el primer número:</label>
                <input type="number" name="numero1" required>
            </div>
            <div>
                <label for="segundo">Introduzca el segundo número:</label>
                <input type="number" name="numero2" required>
            </div>
            <div>
                <label for="operacion">Seleccione la operación:</label><br>
                <input type="radio" id="Suma" name="operaciones" value="suma"> Suma
                <input type="radio" id="Resta" name="operaciones" value="resta"> Resta
                <input type="radio" id="Producto" name="operaciones" value="producto"> Producto
                <input type="radio" id="Cociente" name="operaciones" value="cociente" checked> Cociente
            </div><br>
            <div>
                <input type="submit" id="boton" value="Enviar datos">
            </div>
        </form>
    </div>

</body>
</html>
