<?php
function tabla($ptabla1, $ptabla2, $plimit1, $plimit2, $ptablaPar, $ptablaImpar) {
    $tabla1 = $ptabla1;
    $tabla2 = $ptabla2;
    $limit1 = $plimit1;
    $limit2 = $plimit2;
    $tablaPar = $ptablaPar;
    $tablaImpar = $ptablaImpar;

    $tabla1 = 0;

    while ($tabla1 < $limit1) {
        $tabla1++;
        $tabla2 = 0;
        while ($tabla2 < $limit2) {
            $tabla2++;
            $result = $tabla1 * $tabla2;

            echo $tabla1 . " x " . $tabla2 . " = " . $result . "\n";

            if ($result % 2 == 0) {
                echo "Buzz\n";
                $tablaPar = $tablaPar + 1;
            } else {
                echo "Bass\n";
                $tablaImpar = $tablaImpar + 1;
            }
        }  
    }
    return "Pares: " . $tablaPar . " Impar: " . $tablaImpar . "\n" . "Finalizo";
}
echo tabla(0, 0, 5, 5, 0, 0);
?>

