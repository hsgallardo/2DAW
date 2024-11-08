<?php
// Incluir el archivo de conexión
require_once 'conexion.php';

// Verificar si los datos del formulario han sido enviados
if (isset($_POST['nombre']) && isset($_POST['password'])) {
    $user = $_POST['nombre'];
    $password = $_POST['password'];

    // Realizar la consulta a la base de datos
    $sql = "SELECT * FROM usuarios WHERE usuario = '$user' AND contraseña = '$password'";
    $resultado = $conexion->query($sql);  // Asegúrate de que $conexion esté correctamente definida

    // Verificar si se encontró el usuario
    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        header('Location: index.php?msj=Usuario con rol: ' . $fila['rol']);
        exit;
    } else {
        header('Location: index.php?msj=Credenciales incorrectas');
        exit;
    }
}
?>
