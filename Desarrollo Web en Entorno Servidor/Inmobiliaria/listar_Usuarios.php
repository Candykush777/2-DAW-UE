<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.html");
    exit();
}

include 'conexion.php';

$sql = "SELECT usuario_id, nombres, apellido1, apellido2, correo, tipo_usuario FROM usuario";
$result = mysqli_query($conexion, $sql);
mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Listado Usuarios</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"
    />
    <link rel="stylesheet" href="/Inmobiliaria/Utils/css/style.css" />
  </head>
  <body class="bg-black bodyAll bg-gradient bg-black-custom bodybody d-flex flex-column min-vh-100 p-3">
    <!-- Header con barra de navegación -->
    <div class="container buscarPisoDiv">
      <h1 class="tituloh1 bg-black bg-gradient bg-black-custom2 text-center p-3">
        Quality Inmobiliaria
      </h1>
      <nav class="navbar navbar-expand-lg navbar-dark py-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="/Inmobiliaria/letra-q.png" alt="Logo" width="70" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link text-white fs-4" href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fs-4" href="#">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fs-4" href="menu_Admin.php">Volver atrás</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fs-4" href="logout.php">Cerrar Sesión</a>
              </li>
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
    </div> <!-- Fin container buscarPisoDiv -->

    <!-- Main content -->
    <main class="mainContent container mb-5">
      <div class="card bg-dark text-white">
        <div class="card-body mb-5">
          <?php if (mysqli_num_rows($result) > 0) { ?>
            <h3 class="text-center mb-4">Listado Usuarios</h3>
            <table class="table table-dark table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Primer Apellido</th>
                  <th>Segundo Apellido</th>
                  <th>Email</th>
                  <th>Tipo de Usuario</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($usuario = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                    <td><?php echo $usuario['usuario_id']; ?></td>
                    <td><?php echo $usuario['nombres']; ?></td>
                    <td><?php echo $usuario['apellido1']; ?></td>
                    <td><?php echo $usuario['apellido2']; ?></td>
                    <td><?php echo $usuario['correo']; ?></td>
                    <td><?php echo $usuario['tipo_usuario']; ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          <?php } else { ?>
            <div class="alert alert-warning text-center">No se encontró ningún usuario</div>
          <?php } ?>
        </div> <!-- Fin card-body -->
      </div> <!-- Fin card -->
    </main> <!-- Fin main -->

    <!-- Footer -->
    <footer class="footerAll text-white py-3 mt-auto">
      <div class="container text-center">
        <div class="row">
          <!-- Sección de contacto -->
          <div class="col-md-6 mb-3">
            <h5>Contacto</h5>
            <p>Dirección: Calle Falsa 123, Ciudad</p>
            <p>Teléfono: +123 456 789</p>
          </div>
          <!-- Sección de redes sociales -->
          <div class="col-md-6">
            <h5>Síguenos</h5>
            <a href="#" class="text-white me-3">
              <img src="instagram-icon.png" alt="Instagram" width="30" />
            </a>
            <a href="#" class="text-white me-3">
              <img src="twitter-icon.png" alt="Twitter" width="30" />
            </a>
            <a href="#" class="text-white">
              <img src="facebook-icon.png" alt="Facebook" width="30" />
            </a>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
