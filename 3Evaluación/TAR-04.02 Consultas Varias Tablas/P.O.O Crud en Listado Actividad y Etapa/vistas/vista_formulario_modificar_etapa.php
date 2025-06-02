<!DOCTYPE html>
<html>
    <head>
        <title>Modificar Etapa</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h3>Modificar Etapa</h3>
        <form action="./proceso_modificar_etapa.php" method="post">

            <input type="hidden" name="idetapa" value="<?php echo $etapa['idetapa']; ?>">
            <input type="text" name="nombreEtapa" placeholder="Nombre de la Etapa:" value="<?php echo $etapa['nombreEtapa']; ?>"><br/><br/>      

            <!--Necesitamos pasar el ID y lo haremos con GET o hidden en este caso lo haremos con HIDDEN con GET sería necesaría sesiones-->
            <input type="submit" value="Modificar">
        </form>
    </body>
</html>