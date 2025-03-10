<?php
    require_once('./controlador/cMinijuegos.php');

    $objCMinijuegos = new CMinijuego();
    $ambitos = $objCMinijuegos->formularioAltaMostrar();
    
    include_once($objCMinijuegos->vista);
?>