<?php
require_once '../controladores/Cminijuegos.php'; 

// Crear instancia del controlador
$controlador = new Cminijuegos();

// Obtener los ámbitos desde la base de datos para los checkboxes
$ambitos = $controlador->cargarAmbitos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Ámbitos</title>
    <link rel="stylesheet" href="../assets/estilo.css">
</head>
<body>
    <header>
        <h1>Minijuegos</h1>
        <a href="vista_alta_ambito.php">Agregar Ámbito</a>
    </header>
    <main>
        <h2>Selecciona el ámbito que quieres trabajar</h2>
        <form action="resultado_minijuegos.php" method="POST">
            <?php foreach ($ambitos as $ambito): ?>
                <label>
                    <input type="checkbox" name="ambitos[]" value="<?= $ambito['idambito'] ?>">
                    <?= $ambito['nombre'] ?>
                </label><br>
            <?php endforeach; ?>
            <br>
            <input type="submit" value="Continuar">
        </form>
    </main>
    <footer>
        <p>© 2025 Minijuegos</p>
    </footer>
</body>
</html>
