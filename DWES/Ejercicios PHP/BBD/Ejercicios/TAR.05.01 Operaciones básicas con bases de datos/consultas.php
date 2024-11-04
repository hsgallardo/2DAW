<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $contraseña = '';
    $basedatos = "prueba";

    $mysqli = new mysqli($servidor, $usuario, $contraseña, $basedatos);


    //Muestra todos los alumnos > $sql = 'SELECT * FROM alumnos';
    $sql = 'SELECT * FROM alumnos';

    //Muestra los alumnos mayores de 35 años
    //$sql = 'SELECT * FROM alumnos WHERE edad>35';

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
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>" . $fila["id"] . "</td>
                    <td>" . $fila["nombre"] . "</td>
                    <td>" . $fila["edad"] . "</td>
                    <td>" . $fila["email"] . "</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>0 resultados</td></tr>";
    }

    // Cierra tabla HTML
    echo "</table>";

    $mysqli->close();

?>