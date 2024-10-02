<?php
function contar($numero, $mult){ 
    for($mult=1; $mult<=$numero; $mult++){
        $resultado = $mult * $numero;
        echo ($numero . " x " . $mult . " = " . $resultado . "\n");
    }

}
contar(5,0);
?>
