<?php
function contar($numero, $mult){ 
    while($mult < $numero){
        $mult++;
        $resultado = $mult * $numero;
        echo ($numero . " x " . $mult . " = " . $resultado . "\n");
    }
}
contar(5, 0);
?>
