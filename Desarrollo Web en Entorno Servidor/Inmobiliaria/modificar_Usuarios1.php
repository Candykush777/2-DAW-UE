<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.html");
    exit();
}

include 'conexion.php';

// Verificar si se ha recibido un ID para buscar el usuario
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id']) && !empty($_GET['id'])) {
    $id = mysqli_real_escape_string($conexion, trim($_GET['id']));
    $sql = "SELECT usuario_id, nombres, apellido1, apellido2, correo, tipo_usuario FROM usuario WHERE usuario_id = $id";
    $result = mysqli_query($conexion, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $usuario = mysqli_fetch_assoc($result);
    } else {
        die("Usuario no encontrado.");
    }
}

// Verificar si se han enviado datos para actualizar el usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && !empty($_POST['id'])) {
    $id = mysqli_real_escape_string($conexion, trim($_POST['id']));
    $nombre = mysqli_real_escape_string($conexion, trim(strip_tags($_POST['nombre'])));
    $apellido1 = mysqli_real_escape_string($conexion, trim(strip_tags($_POST['apellido1'])));
    $apellido2 = mysqli_real_escape_string($conexion, trim(strip_tags($_POST['apellido2'])));
    $email = mysqli_real_escape_string($conexion, trim(strip_tags($_POST['email'])));

    $sql = "UPDATE usuario SET 
                nombres = '$nombre',
                apellido1 = '$apellido1',
                apellido2 = '$apellido2',
                correo = '$email'
            WHERE usuario_id = $id";

    if (mysqli_query($conexion, $sql)) {
        // Redirigir a la página de éxito o mostrar mensaje
        header("Location: modificar_Usuarios1.php?id=$id&mensaje=success");
        exit();
    } else {
        die("Error al actualizar el registro: " . mysqli_error($conexion));
    }
}

mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuario</title>
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
    <?php if (isset($_GET['mensaje']) && $_GET['mensaje'] === 'success') : ?>
            <div class="alert alert-success" role="alert">
                Usuario actualizado exitosamente.
            </div>
        <?php endif; ?>
      <div class="form-group formularioR">
        <form class="form" action="modificar_Usuarios1.php" method="post">
        <input type="hidden" name="id" value="<?php echo $usuario['usuario_id']; ?>">
          <label for="nombre" class="form-label">Nombre: </label>
          <input
            type="text"
            class="form-control"
            name="nombre"
            placeholder="Introduce tu nombre"
            required
          />
          <label for="nombre" class="form-label">Primer Apellido: </label>
          <input
            type="text"
            class="form-control"
            name="apellido1"
            placeholder="Introduce tu Primer Apellido"
            required
          />
          <label for="nombre" class="form-label">Segundo Apellido: </label>
          <input
            type="text"
            class="form-control"
            name="apellido2"
            placeholder="Introduce tu Segundo Apellido"
          />
          <label for="nombre" class="form-label">Correo Electrónico: </label>
          <input
            type="email"
            class="form-control"
            name="email"
            placeholder="Introduce tu Email"
            required
          />
       
          <div class="boton">
            <button type="submit" class="btn btn-success btn-lg">
              Guardar cambios
            </button>
          </div>
        </form>
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