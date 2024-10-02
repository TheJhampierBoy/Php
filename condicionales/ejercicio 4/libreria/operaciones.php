<?php
function area1($pladCuad1,$pladCuad2,$pladCuad3){ 
    $cuad1 = $pladCuad1;
    $cuad2 = $pladCuad2;
    $cuad3 = $pladCuad3;


    $cuad1=$pladCuad1* $pladCuad1;
    $cuad2=$pladCuad2* $pladCuad2;
    $cuad3=$pladCuad3* $pladCuad3;


    if($cuad1==$cuad2 && $cuad1==$cuad3){
        return ("Las areas de los cuadrados son iguales");
    }
    else{
        if($cuad1>$cuad2 && $cuad1>$cuad3){
            return ("El area del cuadrado 1 es mayor");
        }
        else{
            if($cuad2>$cuad3 && $cuad2>$cuad1){
                return("El area del cuadrado 2 es mayor");
            }
            else{
                return("El area del cuadrado 3 es mayor");
            }
        }
       
    }
}

?>