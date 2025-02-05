<?php
require_once '../controladores/Cminijuegos.php';

$controlador = new Cminijuegos();

// Inicializar los minijuegos seleccionados
$minijuegos = [];

if (isset($_POST['ambitos'])) {
    // Recoger los ámbitos seleccionados
    $ambitosSeleccionados = $_POST['ambitos'];

    // Cargar los minijuegos correspondientes a los ámbitos seleccionados
    $minijuegos = $controlador->cargarMinijuegos($ambitosSeleccionados);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Minijuegos</title>
    <link rel="stylesheet" href="../assets/estilo.css">
</head>
<body>
    <header>
        <h1>Resultados de Minijuegos</h1>
    </header>
    <main>
        <?php if (!empty($minijuegos)): ?>
            <h2>Minijuegos disponibles</h2>
            <ul>
                <?php foreach ($minijuegos as $juego): ?>
                    <li>
                        <strong><?= $juego['minijuego'] ?></strong> - <em><?= $juego['ambito'] ?></em>
                        <br>
                        <a href="<?= $juego['url_juego'] ?>" target="_blank">Jugar</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No hay minijuegos disponibles para los ámbitos seleccionados.</p>
        <?php endif; ?>
        <a href="vista_minijuegos.php">Volver al formulario</a>
    </main>

    <footer>
        <p>© 2025 Minijuegos</p>
    </footer>
</body>
</html>
