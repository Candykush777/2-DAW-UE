<!-- Escribe un programa que guarde en una cookie el color de fondo (propiedad background-color) de una página.
 Esta página debe tener únicamente algo de texto y un formulario para cambiar el color. -->

 <?php 
// Definimos el color de fondo predeterminado
$backgroundcolor = "#ffffff";

// Verificamos si se ha pulsado el formulario para cambiar el color
if(isset($_REQUEST['cambiar'])) {
    if(isset($_REQUEST['color1'])) {
        // Si el usuario selecciona un color, asignarlo a la variable
        $backgroundcolor = $_REQUEST['color1'];
    }

    // Crear la cookie con el color seleccionado
    setcookie("color1", $backgroundcolor, time() + 200);
} 
// Si ya existen cookies, usar el color guardado
elseif (isset($_COOKIE['color1'])) {
    $backgroundcolor = $_COOKIE['color1'];
}

// Para borrar las cookies, si se solicita
if(isset($_REQUEST['borrarCookie'])) {
    // Borrar la cookie
    setcookie("color1", "", time() - 1);
    // Restablecer el color de fondo a su valor predeterminado
    $backgroundcolor = "#ffffff";
}
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
        body {
            background-color: <?php echo $backgroundcolor; ?>;
        }
    </style>
 </head>
 <body>
<?php
 if(!isset($_COOKIE['color1']) && !isset($_REQUEST['color1'])){

    echo "No has elegido ningun color, rellena el formulario";
 }
 ?>

 <form action="#" method="post">
    <label for="color1">Seleciona el color: </label><br>

 <input type="color" name="color1" value="<?php echo $backgroundcolor; ?>"><br>
<input type="submit" value="cambiar" name="cambiar">


 </form>
 <form action="#" method="post">

 <input type="hidden" name="borrarCookie" value="si">
 <input type="submit" name="Borrar Cookies" value="Borrar Cookies">
 </form>
 </body>
 </html>