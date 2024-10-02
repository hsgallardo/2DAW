<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Par</title>
        <style>
                        
            table{
                margin: 15% auto;
                width: 70%;
                border-collapse: collapse;
                background-color: #587965;
            }
            th,tr,td{
                border: solid black;
                text-align: center;
                padding: 1%;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>
                    Numero
                </th>
                <th>
                    Cuadrado del número
                </th>
                <th>
                    Par o Impar
                </th>
            </tr>
            <?php
                echo '<tr><td>'.$_GET['num'].'</td><td>'.$_GET['resultado'].'</td><td>Par</td></tr>';
            ?>
        </table>
    </body>
</html>