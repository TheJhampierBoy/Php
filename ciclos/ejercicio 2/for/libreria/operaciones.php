<?php
function contar($numero){ 
    for($contar=1; $contar<=$numero; $contar++){
       
        if($contar %2==0){
            echo $contar . " es par ";
        }else{
            echo $contar . " es impar ";
        }
    }
}
contar(5);
?>
