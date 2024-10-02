<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon">
        <title>Ejercicio Factorial Tabla</title>
        <link rel="stylesheet" href="factorial.css">
    </head>
    <body>
        <?php   
            function factorial($numero){
                $resultado = 1;
                while($numero > 0){
                    $resultado = $resultado * $numero;
                    $numero--;
                }
                return $resultado;
            }
        ?>
        <table>
            <tr>
                <td colspan="2">TABLA DE FACTORIALES DEL 1 AL 10</td>
            </tr>
            <tr>
                <td>NÚMERO</td>
                <td>FACTORIAL</td>
                <?php
                    for($i = 1; $i <= 10; $i++){
                        echo '<tr> <td>'.$i.'</td> <td>'.factorial($i).'</td> </tr>';
                    }
                ?>
            </tr>
            <tr>
                <td colspan="2">Hugo Sánchez Gallardo</td>
            </tr>
        </table>
    </body>
</html>
