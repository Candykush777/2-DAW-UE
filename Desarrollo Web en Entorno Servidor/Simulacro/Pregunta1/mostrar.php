<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Notas de Estudiantes</h1>
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <?php
                        if (file_exists("notas.txt")) {
                            $notas = file("notas.txt", FILE_IGNORE_NEW_LINES);
                            echo "<ul class='list-group list-group-flush'>";
                            foreach ($notas as $nota) {
                                echo "<li class='list-group-item'>$nota</li>";
                            }
                            echo "</ul>";
                        } else {
                            echo "<p class='text-center'>No hay notas registradas.</p>";
                        }
                        ?>
                        <div class="text-center mt-3">
                            <a href="index.html" class="btn btn-secondary">Volver al menú</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 