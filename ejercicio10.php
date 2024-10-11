<?php
include 'operaciones.php';

$resultado = ""; // Variable para almacenar la fecha y hora actual

// Establecer la zona horaria a Perú
date_default_timezone_set('America/Lima');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $resultado = mostrar_fecha_hora_actual();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Fecha y Hora Actual</title>
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

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
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
    <h1>Mostrar Fecha y Hora Actual</h1>
    <form method="POST" action="">
        <button type="submit">Mostrar Fecha y Hora</button>
    </form>

    <?php if ($resultado): ?>
        <div class='alert alert-success'>La fecha y hora actual en Perú es: <strong><?php echo $resultado; ?></strong></div>
    <?php endif; ?>

    <a href="index.html"><button style="margin-top: 10px;">Volver al inicio</button></a>
</body>
</html>
