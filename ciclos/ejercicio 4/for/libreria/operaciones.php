<?php
function contar($numero, $mult){ 
    for($mult=1; $mult<=$numero; $mult++){
        $resultado = $mult * $numero;
        if($mult %2==0){
            echo ($numero . " x " . $mult . " = " . $resultado . " Es par " . "<br>");
        }else{
            echo ($numero . " x " . $mult . " = " . $resultado . " Es impar " . "<br>");
        }
    }
}
contar(9,0);
?>
