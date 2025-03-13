<?php
    require_once("controladores/Cambito.php");
    $objambito = new Cambito();
    // Llama al método cMostrarAmbitosAlta() para obtener los datos de los ámbitos para el formulario de alta
    $resultado = $objambito->cMostrarAmbitosAlta();
    // Carga la vista para mostrar el formulario de alta
    require_once("vistas/" . $objambito->vista . ".php");
?>
