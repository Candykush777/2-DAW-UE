<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./Utils/css/style.css">
</head>
<body>

<div class="container">


<h1 class="text-center mt-4">Introducir Datos</h1>

<form action="formulario.php" method="post">

<div class="mb-3" id="formulario">

<label for="nombre" class="form-label"><b>Nombre:</b></label>
<input type="text" class="form-control w-50" id="nombre" name="nombre" placeholder="Introduce tu nombre">
<label for="password" class="form-label"><b>Clave: </b></label>
<input type="password" class="form-control w-50" name="clave" placeholder="Introduce tu clave">
<button type="submit" class="btn btn-info btn-lg" id="boton" name="submit">Aceptar</button>
</div>
</form>








</div>
    
</body>
</html>