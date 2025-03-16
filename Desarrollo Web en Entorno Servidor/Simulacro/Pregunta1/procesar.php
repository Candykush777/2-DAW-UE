<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $nota = $_POST["nota"];
    
    $entrada = $nombre . ":" . $nota . "\n";
    file_put_contents("notas.txt", $entrada, FILE_APPEND);
    
    header("Location: index.html");
    exit();
}
?> 