<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Minijuegos</title>
</head>
<body>
    <a href="./formularioNuevoMinijuegoProceso.php" class="alta">Añadir minijuego</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Ámbito</th>
                <th>Numero de Etapas</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($resultado as $minijuego){
                    echo '<tr>';
                    echo '<td>'.$minijuego['nombre'].'</td>';
                    echo '<td><img src="'.$minijuego['imagen'].'" alt="'.$minijuego['nombre'].'" style="max-width: 100px; "></td>';
                    echo '<td>'.$minijuego['Anombre'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</td>'; 
                    echo '<td>'.$minijuego['num_etapas'].'</td>';

                    echo '<td>';
                    echo '<a href="./formularioEditarMinijuegoProceso.php?id='.$minijuego['idjuego'].'" class="modificar">Modificar</a><br>';
                    echo '<a href="./eliminarMinijuego.php?id='.$minijuego['idjuego'].'" class="borrar">Borrar</a>';
                    echo '</td>';

                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>