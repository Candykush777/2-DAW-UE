<?php 
include 'validar_Sesion.php'
?>
<?php 

include 'conexion.php';

$codigo_Piso=mysqli_real_escape_string($conexion,trim(strip_tags($_REQUEST['id'])));
$calle=mysqli_real_escape_string($conexion,trim(strip_tags($_REQUEST['calle'])));
$numero=mysqli_real_escape_string($conexion,trim(strip_tags($_REQUEST['numero'])));
$piso=mysqli_real_escape_string($conexion,trim(strip_tags($_REQUEST['piso'])));
$puerta=mysqli_real_escape_string($conexion,trim(strip_tags($_REQUEST['puerta'])));
$cp=mysqli_real_escape_string($conexion,trim(strip_tags($_REQUEST['cp'])));
$metros=mysqli_real_escape_string($conexion,trim(strip_tags($_REQUEST['metros'])));
$zona=mysqli_real_escape_string($conexion,trim(strip_tags($_REQUEST['zona'])));
$precio=mysqli_real_escape_string($conexion,trim(strip_tags($_REQUEST['precio'])));
$imagen=mysqli_real_escape_string($conexion,trim(strip_tags($_REQUEST['imagen'])));

$sql = "UPDATE pisos SET 
        calle = '$calle', 
        numero = '$numero', 
        piso = '$piso', 
        puerta = '$puerta', 
        cp = '$cp', 
        metros = '$metros', 
        zona = '$zona', 
        precio = '$precio', 
        imagen = '$imagen' 
        WHERE Codigo_piso = '$codigo_Piso'";

$result=mysqli_query($conexion,$sql);

if ($result) {

$mensaje="Actualización exitosa";
}
    else{
        $mensaje= "Error al actualizar: " .mysqli_error($conexion);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Inmuebles</title>
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

    <main class="mainContent">
    <div class="container mt-5">
        <div class="alert <?php echo ($result) ? 'alert-success' : 'alert-danger'; ?>" role="alert">
            <?php echo $mensaje; ?>
        </div>
        <div class="text-center mt-4">
            <a href="modificar_Pisos2.php?id=<?php echo $codigo_Piso; ?>" class="btn btn-primary">Volver a editar</a>
            <a href="menu_Admin.php" class="btn btn-secondary">Ir al inicio</a>
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