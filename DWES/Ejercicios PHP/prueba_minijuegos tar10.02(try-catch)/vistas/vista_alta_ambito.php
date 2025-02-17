    <?php
    require_once '../controladores/Cambito.php';
    $controlador = new Cambito();
    $mensaje = "";

    if (isset($_POST['num_ambitos']) && is_numeric($_POST['num_ambitos'])) {
        $numAmbitos = (int) $_POST['num_ambitos'];
    } else {
        $numAmbitos = 1;
    }

    if (isset($_POST['nombres_ambitos'])) {
        $nombresAmbitos = $_POST['nombres_ambitos'];
        $mensaje = $controlador->agregarAmbito($nombresAmbitos);
    }
    ?>

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alta de Ámbito</title>
        <link rel="stylesheet" href="../assets/estilo.css">
    </head>
    <body>
        <header>
            <h1>Alta de Ámbito</h1>
        </header>
        <main>
            <h2>Ingrese el número de ámbitos a añadir</h2>
            <form method="POST">
                <label for="num_ambitos">Número de ámbitos:</label>
                <input type="number" id="num_ambitos" name="num_ambitos" min="1" value="<?= $numAmbitos ?>">
                <br><br>
                <input type="submit" value="Continuar">
            </form><br>

            <?php if (isset($_POST['num_ambitos'])): ?>
                <form method="POST">
                    <?php for ($i = 0; $i < $numAmbitos; $i++): ?>
                        <label for="nombres_ambitos[]">Ámbito <?= $i + 1 ?>:</label>
                        <input type="text" name="nombres_ambitos[]" required>
                        <br>
                    <?php endfor; ?>
                    <br>
                    <input type="submit" value="Guardar">
                </form>
            <?php endif; ?>

            <?php if (!empty($mensaje)): ?>
                <p><?= $mensaje ?></p>
            <?php endif; ?>

            <br>
            <a href="vista_minijuegos.php">Volver</a>
        </main>
        <footer>
            <p>© 2025 Minijuegos</p>
        </footer>
    </body>
    </html>