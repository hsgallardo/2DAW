<?php
require_once '../controladores/Cclase.php';

$controlador = new Cclase();
$pruebas = $controlador->cObtenerTodasLasPruebas();

// Verificamos si el formulario se ha enviado
if (isset($_POST['inscribir'])) {
    foreach ($pruebas as $idPrueba => $prueba) {
        
        if (isset($_POST['alumno_' . $idPrueba])) {
            $idAlumno = $_POST['alumno_' . $idPrueba];
            $controlador->cInscribirAlumnoEnPrueba($idAlumno, $idPrueba);
            echo "<p>El alumno ha sido inscrito correctamente en la prueba: " . htmlspecialchars($prueba['nombre']) . "</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Pruebas Disponibles</title>
</head>
<body>
    <h1>Pruebas Disponibles</h1>

    <?php if (isset($pruebas) && $pruebas): ?>
        <form method="POST">
            <?php foreach ($pruebas as $idPrueba => $prueba): ?>
                <div>
                    <h2><?= htmlspecialchars($prueba['nombre']) ?></h2>
                    <label for="alumno_<?= $idPrueba ?>">Selecciona un Alumno:</label>
                    <select name="alumno_<?= $idPrueba ?>" id="alumno_<?= $idPrueba ?>">
                        <option selected disabled>Selecciona un Alumno</option>
                        <?php foreach ($prueba['alumnos'] as $alumno): ?>
                            <option value="<?= $alumno['idAlumno'] ?>"><?= htmlspecialchars($alumno['nombre']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            <?php endforeach; ?>
            <input type="submit" name="inscribir" value="Inscribir">
        </form>

    <?php else: ?>
        <p>No hay pruebas disponibles o no hay alumnos inscritos.</p>
    <?php endif; ?>
    <script src="../assets/js/script.js"></script>
</body>
</html>
