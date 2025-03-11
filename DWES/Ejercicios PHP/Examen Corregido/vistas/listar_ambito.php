<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Ámbitos</title>
</head>
<body>
    <a href="formulario_alta.php">Añadir Minijuego</a>
    <ul>
        <?php
            // Mostrar los ámbitos si existen
            if (isset($ambitos)) {
                foreach($ambitos as $ambito){
                    echo '<li>' . htmlspecialchars($ambito['nombre']) . '</li>';
                    echo ' <a href="formulario_modificar.php?id=' . htmlspecialchars($ambito['idambito']) . '">Editar</a>';
                }
            }
        ?>
    </ul>
</body>
</html>
