<?php
function areas(){ 
$lado = 20;
$altura = 30;
$base = 100;

function cuadrado($lado){
    return $lado * $lado;
}
function rectangulo($base, $altura){
    return $base * $altura;
}
function triangulo($base, $altura){
    return ($base * $altura) / 2;
}
echo "El area del cuadrado es " . cuadrado($lado) . "<br>" ; 
echo "El area del triangulo es " . triangulo($base, $altura) . "<br>";
echo "El area del rectangulo es " .rectangulo($base, $altura).  "<br>";
}
?>