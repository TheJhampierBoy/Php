<?php
function nota(){ 
$nota1=50;
$nota2=48;
$nota3=35;

$porcenNota1=$nota1*0.3;
$porcenNota2=$nota2*0.3;
$porcenNota3=$nota3*0.3;

$porcentaje=$porcenNota1+$porcenNota2+$porcenNota3;


echo "El porcentaje de la nota 1 " . $porcenNota1 . "<br>";
echo "El porcentaje de la nota 2 " . $porcenNota2 . "<br>";
echo "El porcentaje de la nota 3 " . $porcenNota3 . "<br>";

echo "Suma de las notas " . $porcentaje . "<br>";
}
?>