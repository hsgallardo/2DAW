<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon">
        <title>Factorial Array</title>
    </head>
    <body>
        <?php
            require_once 'funcFactorial.php';
            for($i = 0; $i <= 10;$i++){
                $factoriales[$i] = factorial($i);
            }
        ?>
    </body>
</html>
