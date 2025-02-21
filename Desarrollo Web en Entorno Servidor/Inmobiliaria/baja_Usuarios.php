<?php
include 'validar_Sesion.php';
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
    <link rel="icon" type="image/png" href="logoG.jpeg" sizes="32x32">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/Inmobiliaria/Utils/css/style.css" />
    <title>Quality Inmobiliaria</title>
  </head>
  <body
    class="bg-black bg-gradient bg-black-custom d-flex flex-column min-vh-100 p-3"
  >
    <!-- Header con barra de navegación -->
    <div class="container">
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
                <a class="nav-link text-white fs-4" href="">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fs-4" href="menu_Admin.php">Volver Atrás</a>
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
    </div>


   <div class="container formBorrado">

<form action="bajaUsuarios_admin.php" method="POST">

<label for="buscarID" class="form-label"><h3>Introduce el ID para el borrado del Usuario</h3></label>
<input type="number" class="form-control w-50" name="id" placeholder="Introduce el ID" required>

<div class="boton">
<button type="submit" class="btn btn-danger w-50">Borrar</button>

</div>

</form>

   </div>

    
   <footer class="footer text-white py-3 mt-auto">
      <div class="container text-center ">
        <div class="row">
       
          <div class="col-md-6 mb-3">
            <h5>Contacto</h5>
            <p>Dirección: Calle Virgen del Puerto 15</p>
            <p>Teléfono: +987 654 321</p>
          </div>
        
          <div class="col-md-6">
            <h5>Síguenos</h5>
            <a href="#" class="text-white me-3">
              <img src="./instagram.png" alt="Instagram" width="30" />
            </a>
            <a href="#" class="text-white me-3">
              <img src="./logotipo-de-twitter.png" alt="Twitter" width="30" />
            </a>
            <a href="#" class="text-white">
              <img src="./facebook.png" alt="Facebook" width="30" />
            </a>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>