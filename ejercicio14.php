<?php
include 'operaciones.php';

// Obtener el array de productos
$productos = crear_array_productos();

// Calcular la suma de los precios
$total_precio = sumar_precios($productos);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumar Precios de un Array Multidimensional</title>
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

        .container {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #e7f3fe;
            border: 1px solid #b3d7ff;
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
    </style>
</head>
<body>
    <h1>Sumar Precios de Productos</h1>
    <div class="container">
        <div class="result">
            El total de los precios es: <strong><?php echo number_format($total_precio, 2); ?> S/.</strong>
        </div>
        <a href="index.html"><button>Volver al inicio</button></a>
    </div>
</body>
</html>
