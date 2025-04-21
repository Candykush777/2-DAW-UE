<?php 

$nombre = trim(strip_tags($_REQUEST['nombre']));

$clave = trim(strip_tags($_REQUEST['clave']));

$submit = $_REQUEST['submit'];

$archivo="clave.txt";



// no haria falta isset 
if (isset($submit)) {

           $abrirArchivo =fopen($archivo,"r");

           $usuarioEncontrado=false;


while (($linea =fgets($abrirArchivo)) !== false) {


    $arrayDatos = explode("|",$linea);



if ($arrayDatos[0] == $nombre && $arrayDatos[1]== $clave) {

$usuarioEncontrado=true;

    echo "<b>Bienvenido Usuario</b><br><br><br>";
    echo "<b>Menú de la Aplicación </b><br><br><br>";
    echo "<a href='hacerPedido.php'><b>Hacer Pedidos</b></a><br><br>";
    echo "<a href='mostrarModoTabla.php'><b>Mostrar Pedidos</b></a><br><br>";
    echo "<a href='calcularPrecio.php'><b>Calcular Precio del Pedido</b></a><br><br>";
    echo "<a href='calcularPrecio.php'><b>Sorteo de Pedido</b></a><br>";
   
    break;
}


}


if (!$usuarioEncontrado) {
    echo "Los datos no son correctos, vuelva a intentarlo";
}

fclose($abrirArchivo);
}
  ?>