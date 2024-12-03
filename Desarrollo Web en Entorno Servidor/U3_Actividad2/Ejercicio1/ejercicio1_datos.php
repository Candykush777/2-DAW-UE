<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intrdoucir tres números</title>
</head>
<body>

<div class="container">
    <h2>Introduzca tres números</h2>
<form action="ejercicio1_funcion.php" method="post">
<div>
<label for="primero">Introduzca el primer número : </label><br>
<input type="number" name="numero1" required>
</div>
<div>
<label for="segundo">Introduzca el segundo número : </label><br>
<input type="number" name="numero2" required>
</div>
<div>
<label for="tercero">Introduzca el primer número : </label><br>
<input type="number" name="numero3" required>
</div>

<div>
            <button type="submit" name="calcular" value="true">Calcular</button>
        </div>
</form>
</div>
    
</body>
</html>