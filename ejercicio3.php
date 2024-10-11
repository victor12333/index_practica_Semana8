<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3: Mayor de Tres Números</title>
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
    <h1>Ejercicio 3: Encontrar el Número Mayor</h1>
    
    <form method="POST">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required><br>

        <label for="num3">Número 3:</label>
        <input type="number" name="num3" required><br>

        <input type="submit" name="submit" value="Encontrar Mayor">
        <br>
        <button class="boton-volver" onclick="location.href='index.html';">Volver al inicio</button>
    </form>

    <?php
    include 'operaciones.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        $mayor = encontrar_mayor($num1, $num2, $num3);

        echo "<div class='alert'>El número mayor es: <strong>$mayor</strong></div>";
    }
    ?>
</body>
</html>
