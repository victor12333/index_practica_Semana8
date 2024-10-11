<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4: Invertir Cadena</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin: auto;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"], .boton-volver {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            width: 100%;
        }

        input[type="submit"]:hover, .boton-volver:hover {
            background-color: #218838;
        }

        .alert {
            margin-top: 20px;
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 4: Invertir Cadena</h1>
    
    <form method="POST">
        <label for="cadena">Cadena de texto:</label>
        <input type="text" name="cadena" required><br>

        <input type="submit" name="submit" value="Invertir">
        <br>
        <button class="boton-volver" onclick="location.href='index.html';">Volver al inicio</button>
    </form>

    <?php
    include 'operaciones.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cadena = $_POST['cadena'];

        $cadena_invertida = invertir_cadena($cadena);

        echo "<div class='alert'>La cadena invertida es: <strong>$cadena_invertida</strong></div>";
    }
    ?>
</body>
</html>
