<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Panel de Olimpiadas</title>
</head>
<body>
    <?php
        require_once '../controladores/Cclase.php';

        $controlador = new Cclase();
        $clases = $controlador->cBuscarClase();
    ?>

    <form method="POST" action="mostrar_pruebas.php">
        <h1>Panel de Olimpiadas Escolares</h1>
        <p>Selecciona la clase para ver las pruebas disponibles en las olimpiadas escolares.</p>
        
        <select name="clase">
            <option selected disabled>Selecciona una Clase</option>
            <?php
            if ($clases) {
                foreach ($clases as $clase) {
                    echo '<option value="' . $clase['idClase'] . '">' . $clase['nombre'] . '</option>';
                }
            } else {
                echo '<option disabled>No hay clases disponibles</option>';
            }
            ?>
        </select>
        
        <input type="submit" value="Continuar">
    </form>
</body>
</html>
