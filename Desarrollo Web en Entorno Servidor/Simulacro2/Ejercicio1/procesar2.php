<?php
$nombre = $_POST['nombre'];
$nota = $_POST['nota'];

$archivo = 'alumnos.txt';

// Si el archivo no existe, lo creamos vacío
if (!file_exists($archivo)) {
    file_put_contents($archivo, "");
}

// Abrimos en modo lectura/escritura
$f = fopen($archivo, 'r+');

$existe = false;

// Leemos línea a línea para verificar si ya existe
while (($linea = fgets($f)) !== false) {
    $datos = explode(":", trim($linea));
    if (strtolower($datos[0]) === strtolower($nombre)) {
        $existe = true;
        break;
    }
}

if ($existe) {
    echo "El alumno ya existe.";
} else {
    // Vamos al final del archivo para escribir (append manual)
    fseek($f, 0, SEEK_END);
    fwrite($f, $nombre . ":" . $nota . "\n");
    echo "Alumno añadido correctamente.";
}

fclose($f);
?>
<br><a href="index.html">Volver al inicio</a>