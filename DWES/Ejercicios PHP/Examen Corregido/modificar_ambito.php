<?php
    session_start();
    require_once("controladores/Cambito.php");
    $objambito = new Cambito();
    $resultado = $objambito->cModificarAmbito();
    header("Location: ".$objambito->vista.".php");
?>