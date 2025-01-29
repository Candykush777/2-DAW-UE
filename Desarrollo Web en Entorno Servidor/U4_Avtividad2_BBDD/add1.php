<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir a BBDD</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    
    <link rel="stylesheet" href="./Utils/css/style.css">
</head>
<body class="bg-light">


<h1 class="text-center mb-5 mt-4">Añadir coche</h1>

<div class="container formulario">

<form action="add2.php" method="post">

<label for="marca" class="form-label">Marca:</label>
<input type="text" class="form-control " name="marca" placeholder="Introduce la marca" required>
<label for="modelo" class="form-label">Modelo:</label>
<input type="text" class="form-control" name="modelo" placeholder="Introduce el modelo" required>
<label for="anio" class="form-label">Año:</label>
<input type="date" class="form-control" name="año" placeholder="Introduce el año" required><br>

<button type="submit" class="btn btn-success btn-lg w-100">Añadir</button>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>