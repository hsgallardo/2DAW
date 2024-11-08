<?php
// Definir datos de conexión
$host = 'localhost';
$usuario = 'root';  // O tu usuario de base de datos
$contraseña = '';    // O tu contraseña de base de datos
$base_de_datos = 'escuela';

// Crear la conexión
$conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos);

// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>




  <?php
/*
  -- Crear la tabla 'usuarios' en la base de datos
  CREATE TABLE usuarios (
      id INT AUTO_INCREMENT PRIMARY KEY,  -- ID único para cada usuario
      usuario VARCHAR(50) NOT NULL UNIQUE,  -- Nombre de usuario
      contraseña VARCHAR(255) NOT NULL,  -- Contraseña, que se almacenará como hash
      rol VARCHAR(50) NOT NULL  -- Rol del usuario (por ejemplo, 'admin', 'usuario')
  );

  -- Insertar usuarios con diferentes roles
  INSERT INTO usuarios (usuario, password, rol) 
  VALUES 
    ('fernando', '25022003', 'user'),  -- Usuario 'fernando' con rol 'user'
    ('zeus', '05112002', 'user'),      -- Usuario 'zeus' con rol 'user'
    ('hugo', '26102004', 'admin'),     -- Usuario 'hugo' con rol 'admin'
    ('isa', '14121986', 'admin');      -- Usuario 'isa' con rol 'admin'
*/
?>
