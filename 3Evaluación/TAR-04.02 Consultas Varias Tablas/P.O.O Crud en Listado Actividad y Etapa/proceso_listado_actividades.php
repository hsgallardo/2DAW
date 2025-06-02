<?php
    require_once ("controladores/cactividad.php");
    $objactividad = new cactividad();
    $arrayActividades = $objactividad->listar_actividades();

    require_once("vistas/vista_listado_actividades.php");
?>
