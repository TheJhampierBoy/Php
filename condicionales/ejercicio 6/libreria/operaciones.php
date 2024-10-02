<?php

function salario($pdias, $pvalorDia) {
    $dias = $pdias;
    $valorDia = $pvalorDia;
    $totalSalario = $dias * $valorDia;
    return $totalSalario;
}

function subTransp($pdias, $pvalorDia) {
    $salarioMin = 1600000;
    $salarioTrans = salario($pdias, $pvalorDia);


    if ($salarioTrans <= 2 * $salarioMin) {
        $subTransp = 114000;
        $salarioTrans += $subTransp;
    } else {
        $salarioTrans += 0;
        $subTransp = 0; // Se establece subTransp en 0 en caso de que no se cumpla la condición
    }
    return array('salarioTransporte' => $salarioTrans, 'subsidioTransporte' => $subTransp);
}

function salud($pdias, $pvalorDia) {
    $pagoSalud = salario($pdias, $pvalorDia) * 0.12;
    return array('salarioSalud' => $pagoSalud);
}

function pension($pdias, $pvalorDia) {
    $pagoPension = salario($pdias, $pvalorDia) * 0.16;
    return array('salarioPension' => $pagoPension);
}

function deducible($pdias, $pvalorDia) {
    $pagoDeducible = pension($pdias, $pvalorDia)['salarioPension'] + salud($pdias, $pvalorDia)['salarioSalud'];
    return array('salarioDeducible' => $pagoDeducible);
}

function pagoTotal($pdias, $pvalorDia) {
    $salarioBase = salario($pdias, $pvalorDia);
    $subTranspTotal = subTransp($pdias, $pvalorDia)['salarioTransporte'];
    $deducciones = deducible($pdias, $pvalorDia)['salarioDeducible'];
    $pagoSueldo = $salarioBase + $subTranspTotal - $deducciones;
    return $pagoSueldo;
}
?>
