<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon">
        <title>Prueba</title>
    </head>
    <body>
        <?php $saludo = 'Ejercicio Factorial';?>
        <h1><?php echo $saludo;?></h1>
        <?php   
            function factorial($numero){
                $resultado = 1;
                while($numero > 0){
                    $resultado = $resultado * $numero;
                    $numero--;
                }
                return $resultado;
            }

            for($i = 0; $i <= 5; $i++){
                echo 'El factorial de '.$i.' es '.factorial($i).'<br/>';
            }
        ?>
        <table>
            <tr>
                <td></td>
            </tr>
        </table>
    </body>
</html>
