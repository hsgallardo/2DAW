<?php
require_once '../modelos/Mminijuegos.php';

if (isset($_GET['minijuego'])) {
    $nombreMinijuego = $_GET['minijuego'];

    $modelo = new Mminijuegos();
    $conexion = $modelo->getConexion();

    // Evitar inyección SQL
    $nombreMinijuego = $conexion->real_escape_string($nombreMinijuego);

    $sql = "SELECT idminijuego, nombre, url_juego FROM minijuegos WHERE nombre = '$nombreMinijuego'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $id = $fila['idminijuego'];
        $nombre = $fila['nombre'];
        $url = $fila['url_juego'];

        setcookie("ultimo_minijuego", $nombre);
    } else {
        echo "<p>No se encontró el minijuego.</p>";
        exit;
    }
} else {
    echo "<p>No se ha proporcionado un minijuego.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Minijuego</title>
</head>
<body>
    <h1>Detalles del Minijuego</h1>
    <p><strong>ID:</strong> <?= htmlspecialchars($id) ?></p>
    <p><strong>Nombre:</strong> <?= htmlspecialchars($nombre) ?></p>
    <p><strong>URL del Juego:</strong> <a href="<?= htmlspecialchars($url) ?>" target="_blank"><?= htmlspecialchars($url) ?></a></p>
    <a href="vista_minijuegos.php">Volver</a>
</body>
</html>
