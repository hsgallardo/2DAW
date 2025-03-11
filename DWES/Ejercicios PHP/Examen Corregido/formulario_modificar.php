<?php
    require_once("controladores/Cambito.php");
    $objambito = new Cambito();
    $resultado = $objambito->cMostrarAmbitoid();
    require_once("vistas/" . $objambito->vista . ".php");
?>