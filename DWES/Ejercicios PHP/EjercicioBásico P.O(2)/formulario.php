<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio basico POO 2</title>
    <style>
        form {
            margin: 0 auto;
            width: 200px;
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        input[type="text"] {
            width: 100%;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="visualizar.php" method="POST">
        <label for="">Introduce fecha formato dd/mm/yyyy</label><br>
        <input type="text" name="fecha">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>