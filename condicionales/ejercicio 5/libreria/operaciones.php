<?php
function edad($anionac1, $anionac2, $anionac3) {
    $promedio = (anios1($anionac1) + anios2($anionac2) + anios3($anionac3)) / 3;
    if ($promedio > 17) {
        echo "El promedio cumple con la mayoría de edad\n";
    } else {
        echo "El promedio no cumple con la mayoría de edad\n";
    }
}
function anios1($anionac1) {
    $edad = 2024 - $anionac1;
    if ($edad > 17) {
        echo $edad . " Es mayor de edad\n";
    } else {
        echo $edad . " Es menor de edad\n";
    }
    return $edad;
}
function anios2($anionac2){
    $edad = 2024 - $anionac2;
    if($edad > 17){
        echo $edad . " Es mayor de edad\n";
    }else{
        echo $edad . " Es menor de edad\n";
    }
    return $edad;
}
function anios3($anionac3){
    $edad = 2024 - $anionac3;
    if($edad > 17){
        echo $edad . " Es mayor de edad\n";
    }else{
        echo $edad . " Es menor de edad\n";
    }
    return $edad;
}
?>