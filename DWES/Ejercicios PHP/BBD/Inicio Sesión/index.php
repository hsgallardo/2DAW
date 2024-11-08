<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #e9ecef;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #495057;
        }

        form {
            background-color: #ffffff;
            padding: 40px 30px;
            width: 320px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        form label {
            display: block;
            font-size: 0.9em;
            color: #333;
            margin-bottom: 6px;
            text-align: left;
            font-weight: 600;
        }

        form input[type="text"],
        form input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 8px;
            font-size: 1em;
            color: #495057;
            background-color: #f8f9fa;
            transition: border-color 0.3s;
        }

        form input[type="text"]:focus,
        form input[type="password"]:focus {
            border-color: #80bdff;
            outline: none;
            background-color: #ffffff;
        }

        form input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1em;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        form input[type="submit"]:active {
            transform: scale(0.98);
        }
    </style>
</head>
<body>

<form method="POST" action="recoger.php">
    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="nombre" required><br>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Iniciar Sesión">
</form>

</body>
</html>



