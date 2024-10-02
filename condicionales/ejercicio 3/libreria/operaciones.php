<?php
function numeros($num1, $num2) {
    if ($num1 == $num2) {
        $numer = "Son iguales";
    } else if ($num1 > $num2) {
        $numer = "Número 1 es mayor";
    } else {
        $numer = "Número 2 es mayor";
    }
    return $numer;
}
$num1 = 10;
$num2 = 20;
$resultado = numeros($num1, $num2);
echo $resultado;
?>
