<!--Hugo Sánchez Gallardo-->
<html>
    <head>
        <title>Mostrar</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php require_once 'guardardatosArray.php' ?>
        <table>
            <tr>
                <td>COCHE</td>
                <td>BALON</td>
                <td>ORDENADOR</td>
            </tr>
            <tr>          
                <?php foreach ($imagen as $indice => $contenido) {
                    echo "<td><figure><img src='img/".$contenido."'><figcaption>".$indice."</figcaption></figure></td>";
                }
                ?>
            </tr>
        </table>
    </body>
</html>