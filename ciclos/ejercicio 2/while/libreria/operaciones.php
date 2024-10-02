<?php
function contar($numero){ 
    $contar = 0; // Inicializa $contar
    while ($contar < $numero) {
        $contar++;
        if ($contar % 2 == 0) {
            echo $contar . " es par\n"; 
        } else {
            echo $contar . " es impar\n"; 
        }
    }
}
contar(5);
?>
