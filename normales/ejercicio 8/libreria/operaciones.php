<?php
function persona($valorDia, $diasTrabajados) { 
    $sueldo = $valorDia * $diasTrabajados;
    $salud = $sueldo * 0.12;
    $pension = $sueldo * 0.16;
    $arl = $sueldo * 0.052;
    $descuento = $salud + $pension + $arl;
    $pagTotal = $sueldo - $descuento;

    echo "Sueldo de la persona: " . $sueldo . "<br>";
    echo "Descuento de salud: " . $salud . "<br>";
    echo "Descuento de pensión: " . $pension . "<br>";
    echo "Descuento de ARL: " . $arl . "<br>";
    echo "Total de descuento: " . $descuento . "<br>";
    echo "Pago Total: " . $pagTotal . "<br>";
}
?>
