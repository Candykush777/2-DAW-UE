<?php
include 'validar_Sesion.php';
?>
<?php
include 'conexion.php';

$id = mysqli_real_escape_string($conexion, trim(strip_tags($_REQUEST['id'])));

$sql = "SELECT * FROM usuario WHERE usuario_id = $id";
$result = mysqli_query($conexion, $sql);

$usuario = mysqli_fetch_assoc($result);

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet"  href="/Inmobiliaria/Utils/css/style.css">
</head>
<body class="bg-black bodyAll bg-gradient bg-black-custom bodybody d-flex flex-column min-vh-100 p-3">

    <!-- Navbar -->
    <div class="container buscarPisoDiv">
        <h1 class="tituloh1 bg-black bg-gradient bg-black-custom2 text-center p-3">
            Quality Inmobiliaria
        </h1>
        <nav class="navbar navbar-expand-lg navbar-dark py-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/Inmobiliaria/letra-q.png" alt="Logo" width="70">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-white fs-4" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link text-white fs-4" href="#">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link text-white fs-4" href="logout.php">Cerrar Sesión</a></li>
                        <li class="nav-item">
                            <div class="container sesion">
                                <h5>Sesión iniciada, <?php echo $_SESSION['nombre']; ?>!</h5>
                                <p style="color: crimson;"><?php echo $_SESSION['email']; ?></p>
                                <p>ID de usuario: <?php echo $_SESSION['usuario_id']; ?></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Contenido Principal -->
    <main class="mainContent container mt-4">
        <div class="card bg-dark text-white">
            <div class="card-body">
                <?php if ($usuario) { ?>
                    <h3 class="text-center mb-4">Usuario encontrado</h3>
                    <table class="table table-dark table-striped">
                        <tr><th>ID:</th><td><?php echo $usuario['usuario_id']; ?></td></tr>
                        <tr><th>Nombre:</th><td><?php echo $usuario['nombres']; ?></td></tr>
                        <tr><th>Primer Apellido:</th><td><?php echo $usuario['apellido1']; ?></td></tr>
                        <tr><th>Segundo Apellido:</th><td><?php echo $usuario['apellido2']; ?></td></tr>
                        <tr><th>Email:</th><td><?php echo $usuario['correo']; ?></td></tr>
                        <tr><th>Tipo de Usuario:</th><td><?php echo $usuario['tipo_usuario']; ?></td></tr>
                    </table>
                <?php } else { ?>
                    <div class="alert alert-warning text-center">No se encontró ningún usuario con ese ID</div>
                <?php } ?>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footerAll text-white py-3 mt-auto">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h5>Contacto</h5>
                    <p>Dirección: Calle Falsa 123, Ciudad</p>
                    <p>Teléfono: +123 456 789</p>
                </div>
                <div class="col-md-6">
                    <h5>Síguenos</h5>
                    <a href="#" class="text-white me-3"><img src="instagram-icon.png" alt="Instagram" width="30"></a>
                    <a href="#" class="text-white me-3"><img src="twitter-icon.png" alt="Twitter" width="30"></a>
                    <a href="#" class="text-white"><img src="facebook-icon.png" alt="Facebook" width="30"></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
