<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Vehículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    
    <link rel="stylesheet" href="./Utils/css/style.css">


</head>
<body class="bg-light">

<h1 class="text-center mt-4 mb-5">Buscar Vehículo por Marca o Modelo</h1>

<div class="container formulario">

<form action="search2.php" method="post">

<label for="marca" class="form-label">Marca:</label>
<input type="text" class="form-control" name="marca" placeholder="Introduce la Marca" > <!-- no le pongo required, ya que es buscar por una o por otra -->
<label for="modelo" class="form-label">Modelo:</label>
<input type="text" class="form-control" name="modelo" placeholder="Introduce el Modelo" ><br>

<button type="submit" class="btn btn-success btn-lg w-100">Buscar</button><br><br>


<a href="add1.php">Volver al menú</a>

</form>







</div>


    
</body>
</html>