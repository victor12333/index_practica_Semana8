<?php
include 'operaciones.php';

$areaCirculo = ""; // Variable para almacenar el área del círculo

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $radio = $_POST['radio'];
    $areaCirculo = calcular_area_circulo($radio);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Área de un Círculo</title>
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
            width: 100%;
            max-width: 400px;
        }

        label {
            margin-top: 10px;
            display: block;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .alert {
            margin-top: 10px; /* Ajusta el margen superior */
            padding: 15px;
            border-radius: 5px;
            background-color: #dff0d8;
            color: #3c763d;
        }
    </style>
</head>
<body>
    <h1>Calcular Área de un Círculo</h1>
    <form method="POST" action="">
        <label for="radio">Radio:</label>
        <input type="number" name="radio" required>

        <button type="submit">Calcular Área</button>
    </form>

    <?php if ($areaCirculo !== ""): ?>
        <div class='alert alert-success'>El área del círculo es: <strong><?php echo $areaCirculo; ?></strong></div>
    <?php endif; ?>

    <a href="index.html"><button style="margin-top: 10px;">Volver al inicio</button></a>
</body>
</html>
