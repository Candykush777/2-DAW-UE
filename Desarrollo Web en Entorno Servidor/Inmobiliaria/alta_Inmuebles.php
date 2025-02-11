<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <link rel="icon" type="image/png" href="logoG.jpeg" sizes="32x32">

    <link rel="stylesheet" href="/Inmobiliaria/Utils/css/style.css" />
    <title>Quality Inmobiliaria</title>
  </head>
  <body class="bg-black bg-gradient bg-black-custom bodyAlta d-flex flex-column min-vh-100 p-3">
    <!-- Header con barra de navegación -->
    <div class="container">
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
                <a class="nav-link text-white fs-4" href="formulario_registro.html">Volver Atrás</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fs-4" href="logout.php">Cerrar Sesión</a>
              </li>
              <li class="nav-item">
              <div class="container sesion">
              <h5>Sesión iniciada, <?php echo $_SESSION['nombre']; ?>!</h5>
              <p style="color: crimson;"><?php echo $_SESSION['email']; ?></p>  <!-- Aquí lo mostramos -->
              <p>ID de usuario: <?php echo $_SESSION['usuario_id']; ?></p>
              </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  
      <!-- Formulario -->
      <div class="form-group formulario1">
        <div class="contenedor-principal">
          <form class="form" action="dardeAlta.php" method="POST" enctype="multipart/form-data">
            <table class="table">
              <tr>
                <!-- Primera columna: 5 campos -->
                <th style="vertical-align: top;">
                  <div class="form-group">
                    <label for="calle" class="form-label">Calle:</label>
                    <input type="text" class="form-control" name="calle" placeholder="Introduce la calle" required />
  
                    <label for="numero" class="form-label">Número:</label>
                    <input type="text" class="form-control" name="numero" placeholder="Introduce el número" required />
  
                    <label for="piso" class="form-label">Piso:</label>
                    <input type="text" class="form-control" name="piso" placeholder="Introduce el piso" />
  
                    <label for="puerta" class="form-label">Puerta:</label>
                    <input type="text" class="form-control" name="puerta" placeholder="Introduce la puerta" required />
  
                    <label for="cp" class="form-label">CP:</label>
                    <input type="text" class="form-control" name="cp" placeholder="Introduce el CP" required />
                  </div>
                </th>
                <!-- Segunda columna: 4 campos -->
                <th style="vertical-align: top;">
                  <div class="form-group">
                    <label for="metros" class="form-label">Metros:</label>
                    <input type="number" class="form-control" name="metros" placeholder="Introduce los metros" required />
  
                    <label for="zona" class="form-label">Zona:</label>
                    <input type="text" class="form-control" name="zona" placeholder="Introduce la zona" required />
  
                    <label for="precio" class="form-label">Precio:</label>
                    <input type="number" class="form-control" name="precio" placeholder="Introduce el precio" required /><br>
  
                    <label for="imagen" class="form-label">Inserta una imagen:</label>
                    <input type="file" class="form-control" name="imagen" required />
                  </div>
                </th>
              </tr>
            </table>
            <div class="boton">
              <button type="submit" class="btn btn-success btn-lg">Registrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  
    <!-- Footer -->
    <footer class="footer text-white py-3 mt-auto mt-5">
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
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  
</html>
