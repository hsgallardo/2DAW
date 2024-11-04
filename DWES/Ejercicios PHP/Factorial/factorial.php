<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <?php
                require_once 'funciones.php';
                $min=$_GET['min'];
                $max=$_GET['max'];
                echo '<th colspan="2">TABLA DE FACTORIALES DEL '.$min.' AL '.$max.'</th>';
            ?>
            
        </tr>
        <tr class="subtitulo">
            <td>NÚMERO</td>
            <td>FACTORIAL</td>
        </tr>
        <tr></tr>
        <?php
            for($i=$min; $i<=$max; $i++){
                $total=$min;
                factorial($total, $i);
                echo "<tr><td>".$i."</td><td>".$total."</td></tr>";
            }
        ?>
    </table>
    <a href="formulario.php">Volver atras</a>
</body>
</html>