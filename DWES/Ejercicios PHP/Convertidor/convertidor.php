<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor</title>
</head>
<body>
    <form action="procesar.php" method="get">
        Quiero convertir: <input type="text" name="valor" placeholder="Valor a convertir">

        <select name="unidad1">
            <option value="km">km</option>
            <option value="m">m</option>
            <option value="cm">cm</option>
        </select>
        a
        <select name="unidad2">
            <option value="km">km</option>
            <option value="m">m</option>
            <option value="cm">cm</option>
        </select><br><br>

        <input type="submit" value="Convertir">
    </form>
</body>
</html>