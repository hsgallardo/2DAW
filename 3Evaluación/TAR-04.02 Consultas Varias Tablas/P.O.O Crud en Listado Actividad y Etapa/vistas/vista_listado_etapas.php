<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Etapas</title>
</head>
<body>
    <a href="proceso_formulario_alta_actividad.php">Añadir Actividad</a>
    <a href="proceso_formulario_alta_etapa.php">Añadir Etapa</a>
    <a href="./proceso_listado_actividades.php">Listado Actividad</a>
    <h1>Listado de Etapas</h1>
    <?php
        foreach ($arrayEtapas as $etapa){
            echo '<li>'.$etapa['nombreEtapa'];

            //$etapas['idetapa'] del echo es $etapas es el nombre que cogemos del foreach y lo que va entre [] ponemos lo que queramos
            //'<a href="../proceso_borrar_etapa.php?idetapa='.   3.'">Borrar</a>' 
            //$sql=INSERT INTO etapas VALUES (2,'ESO');
            //$sql="INSERT INTO etapas VALUES (".2.",'".ESO."');";
            //echo $sql;

            echo '<a href="./proceso_borrar_etapa.php?idetapa='.$etapa['idetapa'].'">Borrar</a> ';
            echo '<a href="./proceso_formulario_modificar_etapa.php?idetapa=' . $etapa['idetapa'] . '">Modificar</a>';
            //Cuidado al concatenar y con los espacios ya que si ponemos espacios salen errores


        }
    ?>
</body>
</html>