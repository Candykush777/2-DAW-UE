<?php
// Incluir la configuración de la base de datos
require_once 'config.php';

try {
    // Crear la conexión PDO
    $dsn = "mysql:host={$cfg['mysqlHost']};dbname={$cfg['mysqlDatabase']};charset=utf8";
    $pdo = new PDO($dsn, $cfg['mysqlUser'], $cfg['mysqlPassword']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

// Crear la tabla "Empleados" si no existe
$sqlCrearTabla = "CREATE TABLE IF NOT EXISTS Empleados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    salario DECIMAL(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
$pdo->exec($sqlCrearTabla);

// Obtener la acción enviada por GET o POST
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

if ($action === 'insertar') {
    // Insertar un nuevo empleado
    $nombre   = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email    = $_POST['email'];
    $salario  = $_POST['salario'];

    $stmt = $pdo->prepare("INSERT INTO Empleados (nombre, apellido, email, salario) VALUES (:nombre, :apellido, :email, :salario)");
    $stmt->execute([
        ':nombre'   => $nombre,
        ':apellido' => $apellido,
        ':email'    => $email,
        ':salario'  => $salario
    ]);
    
    echo "<div class='alert alert-success'>Empleado insertado correctamente.</div>";

} elseif ($action === 'listar') {
    // Listar todos los empleados
    $stmt = $pdo->query("SELECT * FROM Empleados");
    $empleados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if ($empleados) {
        echo "<h2>Lista de Empleados</h2>";
        echo "<table class='table table-bordered'>";
        echo "<thead><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Email</th><th>Salario</th></tr></thead><tbody>";
        foreach ($empleados as $empleado) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($empleado['id']) . "</td>";
            echo "<td>" . htmlspecialchars($empleado['nombre']) . "</td>";
            echo "<td>" . htmlspecialchars($empleado['apellido']) . "</td>";
            echo "<td>" . htmlspecialchars($empleado['email']) . "</td>";
            echo "<td>" . htmlspecialchars($empleado['salario']) . "</td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<div class='alert alert-info'>No se encontraron empleados.</div>";
    }

} elseif ($action === 'buscar') {
    // Buscar un empleado por ID
    $id = $_GET['id'];
    
    $stmt = $pdo->prepare("SELECT * FROM Empleados WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $empleado = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($empleado) {
        echo "<h2>Empleado Encontrado</h2>";
        echo "<p><strong>ID:</strong> " . htmlspecialchars($empleado['id']) . "</p>";
        echo "<p><strong>Nombre:</strong> " . htmlspecialchars($empleado['nombre']) . "</p>";
        echo "<p><strong>Apellido:</strong> " . htmlspecialchars($empleado['apellido']) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($empleado['email']) . "</p>";
        echo "<p><strong>Salario:</strong> " . htmlspecialchars($empleado['salario']) . "</p>";
    } else {
        echo "<div class='alert alert-warning'>Empleado no encontrado.</div>";
    }

} elseif ($action === 'actualizar') {
    // Actualizar la información de un empleado
    $id       = $_POST['id'];
    $nombre   = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email    = $_POST['email'];
    $salario  = $_POST['salario'];

    $stmt = $pdo->prepare("UPDATE Empleados SET nombre = :nombre, apellido = :apellido, email = :email, salario = :salario WHERE id = :id");
    $stmt->execute([
        ':nombre'   => $nombre,
        ':apellido' => $apellido,
        ':email'    => $email,
        ':salario'  => $salario,
        ':id'       => $id
    ]);

    if ($stmt->rowCount()) {
        echo "<div class='alert alert-success'>Empleado actualizado correctamente.</div>";
    } else {
        echo "<div class='alert alert-warning'>No se actualizó el empleado o no existe.</div>";
    }

} elseif ($action === 'eliminar') {
    // Eliminar un empleado
    $id = $_POST['id'];

    $stmt = $pdo->prepare("DELETE FROM Empleados WHERE id = :id");
    $stmt->execute([':id' => $id]);

    if ($stmt->rowCount()) {
        echo "<div class='alert alert-success'>Empleado eliminado correctamente.</div>";
    } else {
        echo "<div class='alert alert-warning'>No se encontró el empleado para eliminar.</div>";
    }

} else {
    echo "<div class='alert alert-info'>Seleccione una acción.</div>";
}
?>
