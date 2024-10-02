<?php
function tabla($ptabla1, $ptabla2, $plimit1, $plimit2, $ptablaPar, $ptablaImpar) {
    $tablaPar = $ptablaPar;
    $tablaImpar = $ptablaImpar;

    for ($tabla1 = $ptabla1; $tabla1 < $plimit1; $tabla1++) {
        for ($tabla2 = $ptabla2; $tabla2 < $plimit2; $tabla2++) {
            $resultado = $tabla1 * $tabla2;
            echo $tabla1 . " x " . $tabla2 . " = " . $resultado . "\n" . "<br>";

            if ($resultado % 2 === 0) {
                echo "Buzz\n" . "<br>";
                $tablaPar++;
            } else { 
                echo "Bass\n" . "<br>";
                $tablaImpar++;
            }
        }
    }
    return "Pares: " . $tablaPar . " Impar: " . $tablaImpar . "\n" . "Finalizo" . "<br>";
}
echo tabla(1, 1, 6, 6, 0, 0);
?>

