<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2: Celsius a Fahrenheit</title>
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

        input[type="number"], input[type="text"], select {
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
    <h1>Ejercicio 2: Convertir Celsius a Fahrenheit</h1>
    
    <form method="POST">
        <label for="gradosCelsius">Grados Celsius:</label>
        <input type="number" name="gradosCelsius" required><br>

        <input type="submit" name="submit" value="Convertir">
        <br>
        <button class="boton-volver" onclick="location.href='index.html';">Volver al inicio</button>
    </form>

    <?php
    include 'operaciones.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $gradosCelsius = $_POST['gradosCelsius'];

        $fahrenheit = celsius_a_fahrenheit($gradosCelsius);

        echo "<div class='alert'>La temperatura en Fahrenheit es: <strong>$fahrenheit</strong></div>";
    }
    ?>
</body>
</html>
