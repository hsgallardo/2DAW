<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $contraseña = '';
    $basedatos = "escuela";

    $mysqli = new mysqli($servidor, $usuario, $contraseña, $basedatos);

    // Muestra todos los alumnos
    $sql = 'SELECT * FROM alumnos';
    $resultado = $mysqli->query($sql);

    // Tabla HTML
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Email</th>
            </tr>";
    if ($resultado->num_rows > 0) {
            // Salida de los datos de cada fila
            while ($fila = $resultado->fetch_array()) {
                var_dump($fila);
                    echo "</br></br>";
        }
    } else {
        echo "<tr><td colspan='4'>0 resultados</td></tr>";
    }
  

    // Cierra tabla HTML
    echo "</table>";

    $mysqli->close();
?>
