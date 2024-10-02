<?php require_once './funcFactorial.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabla Factorial</title>
        <style>          
           h1{
                text-align: center;
                color: blue;
            }
            div{
                text-align:center;
            }
            a{
                text-align: center;
                color:black;
                display:block;
                text-decoration: none;             
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <h1>Selecciona un número para ver su factorial</h1>
        <div>
            <?php
                for($num = 0;$num <= 10;$num++){
                   //Este código permite enviar a través de la URL tanto el número al que se le calcula el factorial como el resultado del mismo.
                   echo '<a href="recoger.php?resultado='.factorial($num).'&numero='.$num.'"> Factorial de '.$num.'</a> <br/>';
                }       
            ?>  
        </div>                  
    </body>
</html>