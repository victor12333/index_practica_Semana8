<?php
function calcular_promedio($num1, $num2, $num3)
{
    return ($num1 + $num2 + $num3) / 3;
}

function celsius_a_fahrenheit($gradosCelsius)
{
    return ($gradosCelsius * 9 / 5) + 32;
}

function encontrar_mayor($num1, $num2, $num3)
{
    return max($num1, $num2, $num3);
}

function invertir_cadena($texto)
{
    return strrev($texto);
}

function calculadora($num1, $num2, $operacion)
{
    switch ($operacion) {
        case 'suma':
            return $num1 + $num2;
        case 'resta':
            return $num1 - $num2;
        case 'multiplicacion':
            return $num1 * $num2;
        case 'division':
            return $num2 != 0 ? $num1 / $num2 : "Error: División por cero";
        default:
            return "Operación no válida";
    }
}
function calcular_total_con_descuento($total)
{
    if ($total > 100) {
        $descuento = $total * 0.10; // 10% de descuento
        $total -= $descuento;
    }
    return $total;
}
?>
<?php
function convertir_a_mayusculas($cadena)
{
    return strtoupper($cadena);
}
function convertir_a_minusculas($cadena)
{
    return strtolower($cadena);
}
function reemplazar_subcadena($cadena, $buscar, $reemplazo)
{
    return str_replace($buscar, $reemplazo, $cadena);
}
function mostrar_fecha_hora_actual()
{
    return date('d-m-Y H:i:s');
}
function calcular_diferencia_dias($fecha1, $fecha2)
{
    $timestamp1 = strtotime($fecha1);
    $timestamp2 = strtotime($fecha2);

    // Calcular la diferencia en días
    return abs(($timestamp2 - $timestamp1) / (60 * 60 * 24));
}

function calcular_area_circulo($radio)
{
    return pi() * pow($radio, 2); // Área = π * r²
}
?>
<?php
// Función para crear un array multidimensional de productos
function crear_array_productos()
{
    return [
        ["nombre" => "Manzana", "precio" => 1.20],
        ["nombre" => "Banana", "precio" => 0.50],
        ["nombre" => "Naranja", "precio" => 0.80],
        ["nombre" => "Fresa", "precio" => 2.00],
        ["nombre" => "Kiwi", "precio" => 1.50]
    ];
}
function sumar_precios($productos) {
    $total = 0;
    foreach ($productos as $producto) {
        $total += $producto['precio'];
    }
    return $total;
}
?>

