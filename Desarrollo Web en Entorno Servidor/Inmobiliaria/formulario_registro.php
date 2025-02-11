
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario de Registro</title>
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
  </head>
  <body
    class="bg-black bodyAll bg-gradient bg-black-custom d-flex flex-column min-vh-100 p-3"
  >
    <div class="container">
      <h1
        class="tituloh1 bg-black bg-gradient bg-black-custom2 text-center p-3"
      >
        Quality Inmobiliaria
      </h1>

      <div class="container">
      <h1 class="tituloh1 bg-black bg-gradient bg-black-custom2 text-center p-3">Quality Inmobiliaria</h1>
      <nav class="navbar navbar-expand-lg navbar-dark  py-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="/Inmobiliaria/letra-q.png" alt="Logo" width="70">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                      
            </ul>
          </div>
        </div>
      </nav>

      <main class="mainContent">
      <div class="form-group formularioR">
        <form class="form" action="registro.php" method="post">
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
          <label for="nombre" class="form-label">Contraseña: </label>
          <input
            type="password"
            class="form-control"
            name="clave"
            placeholder="Introduce tu Contraseña"
            required
          />
          <div class="boton">
            <button type="submit" class="btn btn-success btn-lg">
              Registrar
            </button>
          </div>
        </form>
      </div>
    </div>
    </main>

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
