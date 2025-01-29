<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Vehículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    
    <link rel="stylesheet" href="./Utils/css/style.css">

</head>
<body class="bg-light">


<h1 class="text-center mb-5 mt-4">Borrar Vehiculo de BBDD</h1>

<div class="container formulario">

<form action="delete2.php" method="post">

<label for="id" class="form-label"><b>Introduce el id:</b></label><br><br>
<input type="number" class="form-control" name="id" placeholder="Inrtroduce id para Borrado" required><br>


<button type="submit" class="btn btn-success btn-lg w-100">Buscar</button><br><br>


<a href="add1.php">Volver al menú</a>


</form>
</div>

    
</body>
</html>