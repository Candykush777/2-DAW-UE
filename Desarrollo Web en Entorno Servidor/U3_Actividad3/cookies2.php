<!-- Escribe un programa que guarde en una cookie el color de fondo (propiedad background-color) de una página.
 Esta página debe tener únicamente algo de texto y un formulario para cambiar el color. -->


 <?php
 //Verificamos si se pulsa cambiar y asignamos el color si se pulsa

 $backgroundcolor="#ffffff";

 if(isset($_REQUEST['cambiar'])){

$backgroundcolor =$_REQUEST['color1'];

//se crea la cookie con el color selecionado

setcookie("color1",$backgroundcolor,time() +200);

//si existen cookies usar el color guardado

 }elseif(isset($_COOKIE['color1'])){
    $backgroundcolor="#ffffff";
 }

 //borrar las cookies

 if(isset($_REQUEST['borrarCookies'])){

    setcookie("color1","",time() -1);
    /* unset($backgroundcolor); no hace falta xq es redundante*/
    $backgroundcolor="#ffffff";
 }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar color fondo</title>
    <style>

        body{

            background-color: <?php echo $backgroundcolor; ?>;
        }
        
    </style>
 </head>
 <body>
    <?php if (!isset($backgroundcolor)) {
        echo "No has elegido ningun color, rellena el color";
        
    }
    
    ?>
<form action="#" method="post">
    <label for="color1" >Seleciona el color</label><br><br>
    <input type="color" name="color1" value="<?php echo $backgroundcolor ?>"><br><br>
    <input type="submit" value="cambiar" name="cambiar">
    </form>
    <form action="#" method="post">

<input type="hidden" name="borrarCookies" value="si">
<input type="submit" name="Borrar Cookies" value="Borrar Cookies">


    </form>
 </body>
 </html>