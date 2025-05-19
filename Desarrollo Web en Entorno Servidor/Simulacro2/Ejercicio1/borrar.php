<?php

$nombreFichero = "agenda.txt";

// Solo hacer algo si se ha enviado el campo "nombre"
if (isset($_POST['nombre'])) {

    $nombreABorrar = trim($_POST['nombre']);

    if (file_exists($nombreFichero)) {

        $lineas = file($nombreFichero);
        $nuevasLineas = [];
        $encontrado = false;

        foreach ($lineas as $linea) {
            $datos = explode(":", trim($linea));

            if ($datos[0] != $nombreABorrar) {
                $nuevasLineas[] = $linea;
            } else {
                $encontrado = true;
            }
        }

        // Reescribir el archivo sin la línea borrada
        $archivo = fopen($nombreFichero, "w");
        foreach ($nuevasLineas as $linea) {
            fwrite($archivo, $linea);
        }
        fclose($archivo);

        if ($encontrado) {
            echo "Alumno borrado con éxito";
        } else {
            echo "No se encontró el nombre indicado";
        }

    } else {
        echo "No hay archivo aún";
    }

} else {
    echo "Por favor, introduce un nombre para borrar.";
}
?>

