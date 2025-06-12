<?php

require_once("./controladores/cusuarios.php");
$cusuarios = new Cusuarios();
$resultado = $cusuarios->autenticar_usuario();

if ($resultado === "A") {
    
    require_once("vistas/vista_admin.php");
} elseif ($resultado === "P") {
    require_once("vistas/vista_profesor.php");
} else {
    echo $resultado;
}
?>