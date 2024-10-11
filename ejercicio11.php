<?php
include 'operaciones.php';

$diferenciaDias = ""; // Variable para almacenar la diferencia en días

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fecha1 = $_POST['fecha1'];
    $fecha2 = $_POST['fecha2'];

    $diferenciaDias = calcular_diferencia_dias($fecha1, $fecha2);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferencia en Días Entre Dos Fechas</title>
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

        input[type="date"] {
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
    <h1>Diferencia en Días Entre Dos Fechas</h1>
    <form method="POST" action="">
        <label for="fecha1">Fecha 1:</label>
        <input type="date" name="fecha1" required>

        <label for="fecha2">Fecha 2:</label>
        <input type="date" name="fecha2" required>

        <button type="submit">Calcular Diferencia</button>
    </form>

    <?php if ($diferenciaDias !== ""): ?>
        <div class='alert alert-success'>La diferencia en días es: <strong><?php echo $diferenciaDias; ?></strong></div>
    <?php endif; ?>

    <a href="index.html"><button style="margin-top: 10px;">Volver al inicio</button></a>
</body>
</html>
