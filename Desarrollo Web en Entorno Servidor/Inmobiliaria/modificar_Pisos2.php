<?php 
include 'validar_Sesion.php'
?>
<?php 

include 'conexion.php';

$codigo_Piso = trim(strip_tags($_REQUEST['id']));
$sql ="SELECT Codigo_piso, calle, numero, piso, puerta, cp, metros, zona, precio, imagen, usuario_id 
FROM pisos WHERE Codigo_piso=$codigo_Piso";

$result =mysqli_query($conexion,$sql);


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

    <?php 
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            ?>
            <div class="container pintaPiso mt-2 mb-4">
                <div class="card shadow">
                    <img class="card-img-top" src="<?php echo $row['imagen']; ?>" alt="Imagen del piso">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['precio']; ?>€</h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['zona']; ?></h6>
                        <div class="card-text">
                            <p><b>Calle:</b> <?php echo $row['calle']; ?></p>
                            <p><b>Número:</b> <?php echo $row['numero']; ?></p>
                            <p><b>Piso:</b> <?php echo $row['piso']; ?></p>
                            <p><b>Puerta:</b> <?php echo $row['puerta']; ?></p>
                            <p><b>CP:</b> <?php echo $row['cp']; ?></p>
                            <p><b>Metros:</b> <?php echo $row['metros']; ?>m²</p>
                            <p><b>Código:</b> <?php echo $row['Codigo_piso']; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <form action="modificar_Pisos3.php" method="post">
                <!-- Enviar los detalles del piso -->
                <input type="hidden" name="id" value="<?php echo $row['Codigo_piso']; ?>">
                <input type="text" name="calle" value="<?php echo $row['calle']; ?>">
                <input type="number" name="numero" value="<?php echo $row['numero']; ?>">
                <input type="number" name="piso" value="<?php echo $row['piso']; ?>">
                <input type="text" name="puerta" value="<?php echo $row['puerta']; ?>">
                <input type="number" name="cp" value="<?php echo $row['cp']; ?>">
                <input type="number" name="metros" value="<?php echo $row['metros']; ?>">
                <input type="text" name="zona" value="<?php echo $row['zona']; ?>">
                <input type="number" name="precio" value="<?php echo $row['precio']; ?>">
                <input type="file" name="imagen" value="<?php echo $row['imagen']; ?>">

                <button type="submit" class="btn btn-warning w-75">Modificar Piso</button>
            </form>
            <?php
        } else {
            ?>
            <div class="alert alert-danger mt-3">
                No hay pisos disponibles con los filtros seleccionados.
            </div>
            <?php
        }
    ?>
    </main>

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