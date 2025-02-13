<?php
        include 'conexion.php';
               $sql = "SELECT Codigo_piso, calle, numero, piso, puerta, cp, metros, zona, precio, imagen, usuario_id 
                FROM pisos 
                WHERE 1=1"; // 1=1 para facilitar añadir condiciones
        // Aplicar Filtro de Metros
        if (isset($_GET['filtro_metros']) && $_GET['filtro_metros'] != '') {
            switch ($_GET['filtro_metros']) {
                case 'menos_100':
                    $sql .= " AND metros < 100";
                    break;
                case '100-170':
                    $sql .= " AND metros BETWEEN 100 AND 170";
                    break;
                case 'mas_170':
                    $sql .= " AND metros > 170";
                    break;
            }
        }
        // Aplicar Filtro de Zona
        if (isset($_GET['filtro_zona']) && $_GET['filtro_zona'] != '') {
            $zona = mysqli_real_escape_string($conexion, $_GET['filtro_zona']);
            $sql .= " AND zona = '$zona'";
        }
        // Ejecutar consulta
        $result = mysqli_query($conexion, $sql);
        // Mostrar resultados
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="container pintaPiso mt-2 mb-4">';
                echo '<div class="card shadow">';
                echo '<img class="card-img-top" src="' . htmlspecialchars($row['imagen']) . '" alt="Imagen del piso">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . number_format($row['precio'], 0, ',', '.') . '€</h5>';
                echo '<h6 class="card-subtitle mb-2 text-muted">' . $row['zona'] . '</h6>';
                echo '<div class="card-text">';
                echo '<p><b>Calle:</b> ' . $row['calle'] . '</p>';
                echo '<p><b>Número:</b> ' . $row['numero'] . '</p>';
                echo '<p><b>Piso:</b> ' . $row['piso'] . '</p>';
                echo '<p><b>Puerta:</b> ' . $row['puerta'] . '</p>';
                echo '<p><b>CP:</b> ' . $row['cp'] . '</p>';
                echo '<p><b>Metros:</b> ' . $row['metros'] . 'm²</p>';
                echo '<p><b>Código:</b> ' . $row['Codigo_piso'] . '</p>';
                echo '</div></div></div></div>';
            }
            echo '<div class="alert alert-success mt-3">Se encontraron ' . mysqli_num_rows($result) . ' resultados.</div>';
        } else {
            echo '<div class="alert alert-danger mt-3">No hay pisos disponibles con los filtros seleccionados.</div>';
        }
                ?>
    </div>
</body>
</html>