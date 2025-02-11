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
    <title>Listado Inmuebles</title>
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
  <body
    class="bg-black bg-gradient bg-black-custom bodybody d-flex flex-column min-vh-100 p-3"
  >
    <!-- Header con barra de navegación -->
    <div class="container buscarPisoDiv">
      <h1
        class="tituloh1 bg-black bg-gradient bg-black-custom2 text-center p-3"
      >
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
                <a class="nav-link text-white fs-4" href="logout.php"
                  >Cerrar Sesión</a
                >
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
      <div class="container listado mt-4">
      <form method="GET" action="buscar_inmueble.php">
            <div class="row">
                <!-- Filtro por Metros -->
                <div class="col-md-6 mb-3">
                    <select class="form-select" name="filtro_metros">
                        <option value="">Todos los metros...</option>
                        <option value="menos_100" <?php if(isset($_GET['filtro_metros']) && $_GET['filtro_metros'] == 'menos_100') echo 'selected'; ?>>Menos de 100m²</option>
                        <option value="100-170" <?php if(isset($_GET['filtro_metros']) && $_GET['filtro_metros'] == '100-120') echo 'selected'; ?>>100m² - 170m²</option>
                        <option value="mas_170" <?php if(isset($_GET['filtro_metros']) && $_GET['filtro_metros'] == 'mas_120') echo 'selected'; ?>>Más de 170m²</option>
                    </select>
                </div>

                <!-- Filtro por Zona -->
                <div class="col-md-6 mb-3">
                    <select class="form-select" name="filtro_zona">
                        <option value="">Todas las zonas...</option>
                        <option value="Noroeste" <?php if(isset($_GET['filtro_zona']) && $_GET['filtro_zona'] == 'Noroeste') echo 'selected'; ?>>Zona Noroeste</option>
                        <option value="Norte" <?php if(isset($_GET['filtro_zona']) && $_GET['filtro_zona'] == 'Norte') echo 'selected'; ?>>Zona Norte</option>
                        <option value="Sur" <?php if(isset($_GET['filtro_zona']) && $_GET['filtro_zona'] == 'Sur') echo 'selected'; ?>>Zona Sur</option>
                    </select>
                </div>

                <!-- Botón de Filtro -->
                <div class="col-md-12 mb-4">
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                    <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btn btn-secondary">Limpiar Filtros</a>
                </div>
            </div>
        </form>
    </div>
    <!-- Footer -->
    <footer class="footerBuscar text-white py-3 mt-auto">
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
