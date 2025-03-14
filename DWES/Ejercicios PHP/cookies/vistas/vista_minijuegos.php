<?php
require_once '../controladores/Cminijuegos.php';

$controlador = new Cminijuegos();
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
    </header>
    <main>
        <h2>Selecciona el ámbito que quieres trabajar</h2>
        <form action="resultado_minijuegos.php" method="POST">
            <?php foreach ($ambitos as $ambito): ?>
                <label>
                    <input type="checkbox" name="ambitos[]" value="<?= htmlspecialchars($ambito['idambito']) ?>">
                    <?= htmlspecialchars($ambito['nombre']) ?>
                </label><br>
            <?php endforeach; ?>
            <br>
            <input type="submit" value="Continuar">
        </form>
    </main>
    <footer>
        <p>© 2025 Minijuegos</p>
        <?php if (isset($_COOKIE['ultimo_minijuego'])): ?>
            <p>Último minijuego utilizado: <?= htmlspecialchars($_COOKIE['ultimo_minijuego']) ?></p>
        <?php endif; ?>
    </footer>
</body>
</html>
