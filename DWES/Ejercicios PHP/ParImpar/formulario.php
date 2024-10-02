<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Par Impar</title>
        <style>
            h1,form{
                text-align: center;
                font-weight: bold;;

            }

            label{
                font-size:22px;
            }

            h1{
                color: #30b2ae;
            }
            input[type="submit"]{
                padding:1%;
                background-color: #1c278c;
                border: 1px;
                border-radius: 100px;
                display: block;
                margin: 1% auto;
                color:white;
            }
        </style>
    </head>
    <body>
        <h1>Par e Impar</h1>
        <form action="calculo.php" method="get">
            <label for="numero">Introduce cualquier número : </label>
            <input type="number" name="Número">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>

