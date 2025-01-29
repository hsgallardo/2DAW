<?php

define("SERVIDOR", "localhost");
define("USUARIO", "root");
define("PASSWORD", "");
define("BBDD", "olimpiadas");


$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);


if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");


$controlador = new mysqli_driver();
$controlador->report_mode = MYSQLI_REPORT_OFF;


$texto_error = $conexion->errno;
?>
